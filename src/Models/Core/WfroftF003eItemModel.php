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
 * ShortQuery Model definition for WfroftF003eItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfroftF003eItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfroftF003eItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfroftF003eItemModel
     */
    public static function getInstance(): WfroftF003eItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfroftF003eItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('entities_entity');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfroftF003eItem');
        $this->setCollectionClassName('WfroftF003eCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(200)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('short_name', false) )
                ->setMaxLength(200)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('email', false) )
                ->setMaxLength(254)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('nip', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('regon', false) )
                ->setMaxLength(14)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('krs', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('street', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('building_number', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('place_number', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('post_code', false) )
                ->setMaxLength(10)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('city', false) )
                ->setMaxLength(50)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('province', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('phone_number', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('type', false) )
                ->setMaxLength(20)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('contact_person', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('community', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('county', false) )
                ->setMaxLength(100)
                ->setPk(false)
        );
    }
}
