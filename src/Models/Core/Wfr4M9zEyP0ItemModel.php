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
 * ShortQuery Model definition for Wfr4M9zEyP0Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfr4M9zEyP0ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfr4M9zEyP0ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfr4M9zEyP0ItemModel
     */
    public static function getInstance(): Wfr4M9zEyP0ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfr4M9zEyP0ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_monitoringcard');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfr4M9zEyP0Item');
        $this->setCollectionClassName('Wfr4M9zEyP0Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('debtor', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('liabilities', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('security_comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('unit_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('guarantee_paid_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('guarantee_paid_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('loan_maturity_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('reguarantee_paid_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('reguarantee_paid_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('status', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
    }
}
