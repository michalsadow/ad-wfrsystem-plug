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
 * ShortQuery Model definition for WfrPfYEzn0XItem.
 *
 * This is a `<shortquery-role:model>`.
 */
class WfrPfYEzn0XItemModel extends Model
{

    /**
     * Holder of model (to prevent multicreation).
     *
     * @var WfrPfYEzn0XItemModel
     */
    private static $instance;

    /**
     * Retrieves only one instance to prevent multicreation.
     *
     * @return WfrPfYEzn0XItemModel
     */
    public static function getInstance(): WfrPfYEzn0XItemModel
    {

        if (is_null(self::$instance) === true) {
            self::$instance = new WfrPfYEzn0XItemModel();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    public function __construct()
    {

        // Define Model.
        $this->setName('bankaccount_bankaccount');
        $this->setDatabases('dwgvJfVU');
        $this->setNamespace('Przeslijmi\AgileDataWfrSystemPlug\Models');
        $this->setInstanceClassName('WfrPfYEzn0XItem');
        $this->setCollectionClassName('WfrPfYEzn0XCollection');

        // Define Fields of Model.
        $this->addField(
            ( new IntField('id', true) )
                ->setMaxLength(9)
                ->setPk(true)
        );
        $this->addField(
            ( new VarCharField('iban', false) )
                ->setMaxLength(34)
                ->setPk(false)
        );
        $this->addField(
            ( new DateField('created_at', false) )
                ->setPk(false)
        );
        $this->addField(
            ( new VarCharField('comment', false) )
                ->setMaxLength(65000)
                ->setPk(false)
        );
        $this->addField(
            ( new IntField('operating_agreement_id', false) )
                ->setMaxLength(9)
                ->setPk(false)
        );
    }
}
