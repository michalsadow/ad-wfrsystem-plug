<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrMlb2IajgItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrMlb2IajgCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrMlb2IajgItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrMlb2IajgItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrMlb2IajgItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `cost_salvage`.
     *
     * @var null|float
     */
    private $costSalvage;

    /**
     * Field `salvage_id`.
     *
     * @var null|integer
     */
    private $salvageId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrMlb2IajgItemModel::getInstance();

        // Set database if given.
        $this->database = $database;
    }

    /**
     * Fast data injector.
     *
     * @param array $inject Data to be injected to object.
     *
     * @return self
     */
    public function injectData(array $inject): self
    {

        // Inject properties.
        if (isset($inject['id']) === true && $inject['id'] !== null) {
            $this->id = (int) $inject['id'];
        }
        if (isset($inject['cost_salvage']) === true && $inject['cost_salvage'] !== null) {
            $this->costSalvage = (float) $inject['cost_salvage'];
        }
        if (isset($inject['salvage_id']) === true && $inject['salvage_id'] !== null) {
            $this->salvageId = (int) $inject['salvage_id'];
        }

        // Mark all fields set.
        $this->setFields = array_keys($inject);

        return $this;
    }

    /**
     * Returns info if primary key for this record has been given.
     *
     * @return boolean
     */
    public function hasPrimaryKey(): bool
    {

        if ($this->id === null) {
            return false;
        }

        return true;
    }

    /**
     * Resets primary key into null - like the record is not existing in DB.
     *
     * @return self
     */
    protected function resetPrimaryKey(): self
    {

        $this->id = null;

        $noInSet = array_search('id', $this->setFields);

        if (is_int($noInSet) === true) {
            unset($this->setFields[$noInSet]);
        }

        return $this;
    }

    /**
     * Getter for `id` field value.
     *
     * @return integer
     */
    public function getId(): int
    {

        return $this->getCoreId(...func_get_args());
    }

    /**
     * Core getter for `id` field value.
     *
     * @return integer
     */
    public function getCoreId(): int
    {

        return $this->id;
    }


    /**
     * Setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setId(int $id): WfrMlb2IajgItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setCoreId(int $id): WfrMlb2IajgItem
    {

        // Test value.
        $this->grabField('id')->isValueValid($id);

        // If there is nothing to be changed.
        if ($this->id === $id) {
            return $this;
        }

        // Save.
        $this->id = $id;

        // Note that was set.
        $this->setFields[]     = 'id';
        $this->changedFields[] = 'id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['id']) === false) {
            $this->fieldsValuesHistory['id'] = [];
        }
        $this->fieldsValuesHistory['id'][] = $id;

        return $this;
    }

    /**
     * Getter for `cost_salvage` field value.
     *
     * @return null|float
     */
    public function getCostSalvage(): ?float
    {

        return $this->getCoreCostSalvage(...func_get_args());
    }

    /**
     * Core getter for `cost_salvage` field value.
     *
     * @return null|float
     */
    public function getCoreCostSalvage(): ?float
    {

        return $this->costSalvage;
    }


    /**
     * Setter for `cost_salvage` field value.
     *
     * @param null|float $costSalvage Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setCostSalvage(?float $costSalvage): WfrMlb2IajgItem
    {

        return $this->setCoreCostSalvage($costSalvage);
    }

    /**
     * Core setter for `cost_salvage` field value.
     *
     * @param null|float $costSalvage Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setCoreCostSalvage(?float $costSalvage): WfrMlb2IajgItem
    {

        // Test value.
        $this->grabField('cost_salvage')->isValueValid($costSalvage);

        // If there is nothing to be changed.
        if (
            $this->costSalvage === $costSalvage
            || (string) $this->costSalvage === (string) $costSalvage
        ) {
            return $this;
        }

        // Save.
        $this->costSalvage = $costSalvage;

        // Note that was set.
        $this->setFields[]     = 'cost_salvage';
        $this->changedFields[] = 'cost_salvage';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['cost_salvage']) === false) {
            $this->fieldsValuesHistory['cost_salvage'] = [];
        }
        $this->fieldsValuesHistory['cost_salvage'][] = $costSalvage;

        return $this;
    }

    /**
     * Getter for `salvage_id` field value.
     *
     * @return null|integer
     */
    public function getSalvageId(): ?int
    {

        return $this->getCoreSalvageId(...func_get_args());
    }

    /**
     * Core getter for `salvage_id` field value.
     *
     * @return null|integer
     */
    public function getCoreSalvageId(): ?int
    {

        return $this->salvageId;
    }


    /**
     * Setter for `salvage_id` field value.
     *
     * @param null|integer $salvageId Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setSalvageId(?int $salvageId): WfrMlb2IajgItem
    {

        return $this->setCoreSalvageId($salvageId);
    }

    /**
     * Core setter for `salvage_id` field value.
     *
     * @param null|integer $salvageId Value to be set.
     *
     * @return WfrMlb2IajgItem
     */
    public function setCoreSalvageId(?int $salvageId): WfrMlb2IajgItem
    {

        // Test value.
        $this->grabField('salvage_id')->isValueValid($salvageId);

        // If there is nothing to be changed.
        if ($this->salvageId === $salvageId) {
            return $this;
        }

        // Save.
        $this->salvageId = $salvageId;

        // Note that was set.
        $this->setFields[]     = 'salvage_id';
        $this->changedFields[] = 'salvage_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['salvage_id']) === false) {
            $this->fieldsValuesHistory['salvage_id'] = [];
        }
        $this->fieldsValuesHistory['salvage_id'][] = $salvageId;

        return $this;
    }
}
