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
 * ShortQuery Model definition for WfrETo0jXYWItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrETo0jXYWItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrETo0jXYWItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrETo0jXYWItemModel
     */
    public static function getInstance(): WfrETo0jXYWItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrETo0jXYWItemModel();
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
        $this->setInstanceClassName('WfrETo0jXYWItem');
        $this->setCollectionClassName('WfrETo0jXYWCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
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
            ( new VarCharField('pf_name', false) )
                ->setMaxLength(200)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('pf_short_name', false) )
                ->setMaxLength(200)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('loan_number', false) )
                ->setMaxLength(40)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('beneficiary_name', false) )
                ->setMaxLength(255)
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
    }
}
