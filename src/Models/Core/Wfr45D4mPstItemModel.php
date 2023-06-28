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
 * ShortQuery Model definition for Wfr45D4mPstItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfr45D4mPstItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfr45D4mPstItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfr45D4mPstItemModel
     */
    public static function getInstance(): Wfr45D4mPstItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfr45D4mPstItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('operating_agreement_operatingagreement');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfr45D4mPstItem');
        $this->setCollectionClassName('Wfr45D4mPstCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('contest_number', false) )
                ->setMaxLength(40)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('number', false) )
                ->setMaxLength(40)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('product_type', false) )
                ->setMaxLength(30)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('start_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('ob_term_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('acceptance_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('end_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('wallet_period', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('unit_agreement_max_length', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('global_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('beneficiary_amount_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('obp_percent_cost_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('owp_percent_cost_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('entity_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
