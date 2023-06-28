<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\Shortquery\Data\Field\DateField;
use Przeslijmi\Shortquery\Data\Field\DecimalField;
use Przeslijmi\Shortquery\Data\Field\EnumField;
use Przeslijmi\Shortquery\Data\Field\IntField;
use Przeslijmi\Shortquery\Data\Field\JsonField;
use Przeslijmi\Shortquery\Data\Field\VarCharField;
use Przeslijmi\Shortquery\Data\Field\SetField;
use Przeslijmi\Shortquery\Data\Model;
use Przeslijmi\Shortquery\Data\Relation\HasManyRelation;
use Przeslijmi\Shortquery\Data\Relation\HasOneRelation;

/**
 * ShortQuery Model definition for WfrqPerl0R4Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrqPerl0R4ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrqPerl0R4ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrqPerl0R4ItemModel
     */
    public static function getInstance(): WfrqPerl0R4ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrqPerl0R4ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('unit_agreement_bank');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrqPerl0R4Item');
        $this->setCollectionClassName('WfrqPerl0R4Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
    }
}
