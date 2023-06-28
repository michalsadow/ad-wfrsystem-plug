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
 * ShortQuery Model definition for WfrQ6IoL8dDItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrQ6IoL8dDItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrQ6IoL8dDItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrQ6IoL8dDItemModel
     */
    public static function getInstance(): WfrQ6IoL8dDItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrQ6IoL8dDItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_obligedentity');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrQ6IoL8dDItem');
        $this->setCollectionClassName('WfrQ6IoL8dDCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('entity_type', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('address', false) )
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
            ( new VarCharField('comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('monitoring_card_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
