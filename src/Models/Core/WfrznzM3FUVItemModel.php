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
 * ShortQuery Model definition for WfrznzM3FUVItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrznzM3FUVItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrznzM3FUVItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrznzM3FUVItemModel
     */
    public static function getInstance(): WfrznzM3FUVItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrznzM3FUVItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('unit_agreement_unitagreement');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrznzM3FUVItem');
        $this->setCollectionClassName('WfrznzM3FUVCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('beneficiary_name', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_post_code', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_province', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_city', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_street', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_building_number', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_place_number', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_regon', false) )
                ->setMaxLength(14)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_nip', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_pkd', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_type', false) )
                ->setMaxLength(4)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('beneficiary_startup', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('start_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('entry_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('validity_term_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('loan_number', false) )
                ->setMaxLength(40)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('loan_destiny', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('leasing_agreement', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('public_granted_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('pf_amount_participation', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('pf_percent', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('mf_amount_participation', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('mf_percent', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('condition', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('security_type', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('security_comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('credit_number', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('credit_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('credit_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('credit_validity_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('bank_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('beneficiary_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('operating_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('base_constant_interest', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('interest', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('profit_interest', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('total_interest', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
    }
}
