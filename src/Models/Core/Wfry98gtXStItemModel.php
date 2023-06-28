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
 * ShortQuery Model definition for Wfry98gtXStItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfry98gtXStItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfry98gtXStItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfry98gtXStItemModel
     */
    public static function getInstance(): Wfry98gtXStItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfry98gtXStItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('bankaccount_bankaccountoperation');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfry98gtXStItem');
        $this->setCollectionClassName('Wfry98gtXStCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DateField('operation_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('currency_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('contractor', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('operation_name', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('operation_amount', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('bank_account_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('accounting_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('contractor_iban', false) )
                ->setMaxLength(34)
                ->setPk(false)
        );
    }
}
