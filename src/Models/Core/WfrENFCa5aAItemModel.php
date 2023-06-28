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
 * ShortQuery Model definition for WfrENFCa5aAItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrENFCa5aAItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrENFCa5aAItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrENFCa5aAItemModel
     */
    public static function getInstance(): WfrENFCa5aAItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrENFCa5aAItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('unit_agreement_tranche');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrENFCa5aAItem');
        $this->setCollectionClassName('WfrENFCa5aACollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DateField('date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('unit_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
