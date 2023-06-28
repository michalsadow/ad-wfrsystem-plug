<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug;

/**
 * Deliver siloses for WFR System.
 */
class Meta
{

    /**
     * Convert SQL field types into silos field types.
     *
     * @var string[]
     */
    protected static $fieldTypeDict = [
        'date' => 'date',
        'datetime' => 'date',
        'decimal' => 'float',
        'int' => 'int',
        'longtext' => 'text',
        'smallint' => 'int',
        'tinyint' => 'int',
        'varchar' => 'text',
    ];
}
