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
 * ShortQuery Model definition for WfrRuQ8awuMItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrRuQ8awuMItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrRuQ8awuMItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrRuQ8awuMItemModel
     */
    public static function getInstance(): WfrRuQ8awuMItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrRuQ8awuMItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('operating_agreement_agreementcost');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrRuQ8awuMItem');
        $this->setCollectionClassName('WfrRuQ8awuMCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new IntField('vindication_cost', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('document_type', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('document_number', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('document_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('company_nip', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('company_name', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('amount_netto', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('qualification_amount_netto', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('qualification_amount_brutto', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('accounting_number', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('cost_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('cost_category_type', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('eligibility', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('additional_notes', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('monitoring_card_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('amount_brutto', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
    }
}
