<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrN60MdQnGItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrN60MdQnGCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrN60MdQnGItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrN60MdQnGItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrN60MdQnGItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `name`.
     *
     * @var null|string
     */
    private $name;

    /**
     * Field `code`.
     *
     * @var null|string
     */
    private $code;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrN60MdQnGItemModel::getInstance();

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
        if (isset($inject['name']) === true && $inject['name'] !== null) {
            $this->name = (string) $inject['name'];
        }
        if (isset($inject['code']) === true && $inject['code'] !== null) {
            $this->code = (string) $inject['code'];
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
     * @return WfrN60MdQnGItem
     */
    public function setId(int $id): WfrN60MdQnGItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrN60MdQnGItem
     */
    public function setCoreId(int $id): WfrN60MdQnGItem
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
     * Getter for `name` field value.
     *
     * @return null|string
     */
    public function getName(): ?string
    {

        return $this->getCoreName(...func_get_args());
    }

    /**
     * Core getter for `name` field value.
     *
     * @return null|string
     */
    public function getCoreName(): ?string
    {

        return $this->name;
    }


    /**
     * Setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrN60MdQnGItem
     */
    public function setName(?string $name): WfrN60MdQnGItem
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrN60MdQnGItem
     */
    public function setCoreName(?string $name): WfrN60MdQnGItem
    {

        // Test value.
        $this->grabField('name')->isValueValid($name);

        // If there is nothing to be changed.
        if ($this->name === $name) {
            return $this;
        }

        // Save.
        $this->name = $name;

        // Note that was set.
        $this->setFields[]     = 'name';
        $this->changedFields[] = 'name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['name']) === false) {
            $this->fieldsValuesHistory['name'] = [];
        }
        $this->fieldsValuesHistory['name'][] = $name;

        return $this;
    }

    /**
     * Getter for `code` field value.
     *
     * @return null|string
     */
    public function getCode(): ?string
    {

        return $this->getCoreCode(...func_get_args());
    }

    /**
     * Core getter for `code` field value.
     *
     * @return null|string
     */
    public function getCoreCode(): ?string
    {

        return $this->code;
    }


    /**
     * Setter for `code` field value.
     *
     * @param null|string $code Value to be set.
     *
     * @return WfrN60MdQnGItem
     */
    public function setCode(?string $code): WfrN60MdQnGItem
    {

        return $this->setCoreCode($code);
    }

    /**
     * Core setter for `code` field value.
     *
     * @param null|string $code Value to be set.
     *
     * @return WfrN60MdQnGItem
     */
    public function setCoreCode(?string $code): WfrN60MdQnGItem
    {

        // Test value.
        $this->grabField('code')->isValueValid($code);

        // If there is nothing to be changed.
        if ($this->code === $code) {
            return $this;
        }

        // Save.
        $this->code = $code;

        // Note that was set.
        $this->setFields[]     = 'code';
        $this->changedFields[] = 'code';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['code']) === false) {
            $this->fieldsValuesHistory['code'] = [];
        }
        $this->fieldsValuesHistory['code'][] = $code;

        return $this;
    }
}
