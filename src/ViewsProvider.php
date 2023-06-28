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
class ViewsProvider extends Meta implements SiloProviderInterface
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
        $defsUri = dirname(dirname(__FILE__)) . '/resources/viewsDefinition.json';
        $defs    = json_decode(file_get_contents($defsUri));
        $silos   = [];

        // Prepare all silos.
        foreach ($defs->views as $viewDef) {

            // Define silo.
            $silo         = new stdClass();
            $silo->class  = new stdClass();
            $silo->fields = [];

            // Define its class.
            $silo->class                = new stdClass();
            $silo->class->item          = 'Wfr' . $viewDef->key . 'Item';
            $silo->class->collection    = 'Wfr' . $viewDef->key . 'Collection';
            $silo->class->tableName     = $viewDef->table;
            $silo->class->humanName     = 'WFR System: ' . $viewDef->humanName;
            $silo->class->humanDesc     = '';
            $silo->class->humanText     = '';
            $silo->class->namespace     = 'Przeslijmi\AgileDataWfrSystemPlug\Models';
            $silo->class->database      = $dbId;
            $silo->class->provider      = self::class;
            $silo->class->isReadOnly    = true;
            $silo->class->queryContents = trim(str_replace('|n|', PHP_EOL, $viewDef->query));

            // Add fields for this silo.
            foreach ($viewDef->fields as $fieldDef) {

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
            $silos[$viewDef->key] = $silo;
        }//end foreach

        return $silos;
    }
}
