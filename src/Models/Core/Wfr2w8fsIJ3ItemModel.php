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
 * ShortQuery Model definition for Wfr2w8fsIJ3Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfr2w8fsIJ3ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfr2w8fsIJ3ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfr2w8fsIJ3ItemModel
     */
    public static function getInstance(): Wfr2w8fsIJ3ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfr2w8fsIJ3ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_contactdata');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfr2w8fsIJ3Item');
        $this->setCollectionClassName('Wfr2w8fsIJ3Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('person_function', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('phone', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('email', false) )
                ->setMaxLength(254)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('monitoring_card_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
