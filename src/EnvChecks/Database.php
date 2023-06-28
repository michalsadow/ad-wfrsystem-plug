<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\EnvChecks;

use Przeslijmi\AgileData\Configure\EnvChecks\EnvChecksParent;

/**
 * Checks if given ENV value is proper.
 */
class Database extends EnvChecksParent
{

    /**
     * Standard rules to be checked.
     *
     * @var array
     */
    protected static $rules = [
        'dataType' => 'string',
        'canBeEmpty' => false,
    ];

    /**
     * Perform checks.
     *
     * @param mixed $value Value to be checked.
     *
     * @return void
     */
    public static function check($value): void
    {

        // Short path.
        if (empty($value) === true) {
            return;
        }

        // Lvd.
        $databases = ( $_ENV['PRZESLIJMI_AGILEDATA_DATABASES'] ?? [] );
        $wfrDb     = ( $databases[$value] ?? null );

        // Check if is present.
        if ($wfrDb === null) {
            self::throw('DatabaseDonoex', $value);
        }

        // Check if is set to read only.
        if ($wfrDb['isMain'] !== 'no' || $wfrDb['isReadOnly'] !== 'yes') {
            self::throw('WfrDatabaseWrongConfiguration', $value);
        }
    }
}
