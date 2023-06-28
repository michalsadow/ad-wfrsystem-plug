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
 * ShortQuery Model definition for WfrjNpH7a43Item.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrjNpH7a43ItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrjNpH7a43ItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrjNpH7a43ItemModel
     */
    public static function getInstance(): WfrjNpH7a43ItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrjNpH7a43ItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('operating_agreement_businessplan');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrjNpH7a43Item');
        $this->setCollectionClassName('WfrjNpH7a43Collection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DecimalField('current_state', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('planned_state', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('current_cost_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new DecimalField('planned_cost_limit', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('year', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('date', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('operating_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
