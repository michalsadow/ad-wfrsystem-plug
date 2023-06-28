<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug;

use Przeslijmi\AgileData\Configure\SiloProviders\SiloProviderInterface;
use Przeslijmi\AgileData\Tools\JsonSettings as Json;
use Przeslijmi\AgileDataWfrSystemPlug\Meta;
use stdClass;

/**
 * Deliver siloses for WFR System.
 */
class SilosProvider extends Meta implements SiloProviderInterface
{

    /**
     * Deliver all silos for WFR System.
     *
     * @return array
     */
    public static function provide(): array
    {

        // Lvd.
        $dbId = ( $_ENV['PRZESLIJMI_ADWFRSYSTEMPLUG_DATABASE'] ?? '' );

        // Short track.
        if (
            empty($dbId) === true
            || isset($_ENV['PRZESLIJMI_AGILEDATA_DATABASES'][$dbId]) === false
            || empty($_ENV['PRZESLIJMI_AGILEDATA_DATABASES'][$dbId]) === true
        ) {
            return [];
        }

        // Lvd.
        $defsUri = dirname(dirname(__FILE__)) . '/resources/dbDefinition.json';
        $defs    = json_decode(file_get_contents($defsUri));
        $silos   = [];

        // Prepare all silos.
        foreach ($defs->tables as $tableDef) {

            // Define silo.
            $silo         = new stdClass();
            $silo->class  = new stdClass();
            $silo->fields = [];

            // Define its class.
            $silo->class                = new stdClass();
            $silo->class->item          = 'Wfr' . $tableDef->key . 'Item';
            $silo->class->collection    = 'Wfr' . $tableDef->key . 'Collection';
            $silo->class->tableName     = $tableDef->name;
            $silo->class->humanName     = 'WFR System: ' . $tableDef->humanName;
            $silo->class->humanDesc     = '';
            $silo->class->humanText     = '';
            $silo->class->namespace     = 'Przeslijmi\AgileDataWfrSystemPlug\Models';
            $silo->class->database      = $dbId;
            $silo->class->provider      = self::class;
            $silo->class->isReadOnly    = true;
            $silo->class->queryContents = '';

            // Add fields for this silo.
            foreach ($defs->fields as $fieldDef) {

                // This field is not for this table.
                if ($fieldDef->table !== $tableDef->name) {
                    continue;
                }

                // Define field.
                $field                  = new stdClass();
                $field->name            = $fieldDef->field;
                $field->isPrimaryKey    = ( ( $fieldDef->field === 'id' ) ? true : false );
                $field->type            = self::$fieldTypeDict[$fieldDef->type];
                $field->length          = ( ( empty($fieldDef->length) === false ) ? (int) $fieldDef->length : null );
                $field->isAutoIncrement = false;
                $field->humanName       = $fieldDef->humanName;

                // Correct length.
                if ($field->type === 'int') {
                    $field->length = 9;
                } elseif ($fieldDef->type === 'longtext') {
                    $field->length = 65000;
                } elseif ($field->type === 'float') {
                    $field->length        = 9;
                    $field->decimalPlaces = 2;
                }

                // Add this field into collection of fields for given table.
                $silo->fields[$fieldDef->key] = $field;
            }//end foreach

            // Save this silo.
            $silos[$tableDef->key] = $silo;
        }//end foreach

        return $silos;
    }
}
