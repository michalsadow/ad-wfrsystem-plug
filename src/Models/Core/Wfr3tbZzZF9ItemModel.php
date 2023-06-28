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
 * ShortQuery Model definition for Wfr3tbZzZF9Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class Wfr3tbZzZF9ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var Wfr3tbZzZF9ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return Wfr3tbZzZF9ItemModel
     */
    public static function getInstance(): Wfr3tbZzZF9ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new Wfr3tbZzZF9ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_action');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('Wfr3tbZzZF9Item');
        $this->setCollectionClassName('Wfr3tbZzZF9Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('symbol', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('action_date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('monitoring_card_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
