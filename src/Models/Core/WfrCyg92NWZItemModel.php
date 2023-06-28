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
 * ShortQuery Model definition for WfrCyg92NWZItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrCyg92NWZItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrCyg92NWZItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrCyg92NWZItemModel
     */
    public static function getInstance(): WfrCyg92NWZItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrCyg92NWZItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_salvage');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrCyg92NWZItem');
        $this->setCollectionClassName('WfrCyg92NWZCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DateField('salvage_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('pf_fund', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('mfp_fund', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('pf_contractual_interest', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('mfp_contractual_interest', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('pf_overdue_debt', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('mfp_overdue_debt', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('salvage_overall_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('monitoring_card_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
