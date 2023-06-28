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
 * ShortQuery Model definition for WfrMlb2IajgItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrMlb2IajgItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrMlb2IajgItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrMlb2IajgItemModel
     */
    public static function getInstance(): WfrMlb2IajgItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrMlb2IajgItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('vindication_salvagecost');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrMlb2IajgItem');
        $this->setCollectionClassName('WfrMlb2IajgCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new DecimalField('cost_salvage', false) )
                ->setSize(9, 2)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('salvage_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
