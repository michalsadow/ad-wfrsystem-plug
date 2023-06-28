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
 * ShortQuery Model definition for Wfr7L4cHvR7Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfr7L4cHvR7ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfr7L4cHvR7ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfr7L4cHvR7ItemModel
     */
    public static function getInstance(): Wfr7L4cHvR7ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfr7L4cHvR7ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('operating_agreement_agreementconcentration');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfr7L4cHvR7Item');
        $this->setCollectionClassName('Wfr7L4cHvR7Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DecimalField('amount_from', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('amount_to', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('percent_participation', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('type', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('operating_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
