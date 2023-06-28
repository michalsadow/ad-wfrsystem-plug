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
 * ShortQuery Model definition for WfrTDLCe9hcItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrTDLCe9hcItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrTDLCe9hcItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrTDLCe9hcItemModel
     */
    public static function getInstance(): WfrTDLCe9hcItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrTDLCe9hcItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_security');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrTDLCe9hcItem');
        $this->setCollectionClassName('WfrTDLCe9hcCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('security_type', false) )
                ->setMaxLength(255)
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('name', false) )
                ->setMaxLength(255)
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
