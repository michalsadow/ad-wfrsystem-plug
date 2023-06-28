<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\Wfr2w8fsIJ3ItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr2w8fsIJ3Collection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\Wfr2w8fsIJ3Item;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for Wfr2w8fsIJ3Item Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class Wfr2w8fsIJ3ItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `person_function`.
     *
     * @var null|string
     */
    private $personFunction;

    /**
     * Field `name`.
     *
     * @var null|string
     */
    private $name;

    /**
     * Field `phone`.
     *
     * @var null|string
     */
    private $phone;

    /**
     * Field `email`.
     *
     * @var null|string
     */
    private $email;

    /**
     * Field `monitoring_card_id`.
     *
     * @var null|integer
     */
    private $monitoringCardId;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = Wfr2w8fsIJ3ItemModel::getInstance();

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
        if (isset($inject['person_function']) === true && $inject['person_function'] !== null) {
            $this->personFunction = (string) $inject['person_function'];
        }
        if (isset($inject['name']) === true && $inject['name'] !== null) {
            $this->name = (string) $inject['name'];
        }
        if (isset($inject['phone']) === true && $inject['phone'] !== null) {
            $this->phone = (string) $inject['phone'];
        }
        if (isset($inject['email']) === true && $inject['email'] !== null) {
            $this->email = (string) $inject['email'];
        }
        if (isset($inject['monitoring_card_id']) === true && $inject['monitoring_card_id'] !== null) {
            $this->monitoringCardId = (int) $inject['monitoring_card_id'];
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
     * @return Wfr2w8fsIJ3Item
     */
    public function setId(int $id): Wfr2w8fsIJ3Item
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCoreId(int $id): Wfr2w8fsIJ3Item
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
     * Getter for `person_function` field value.
     *
     * @return null|string
     */
    public function getPersonFunction(): ?string
    {

        return $this->getCorePersonFunction(...func_get_args());
    }

    /**
     * Core getter for `person_function` field value.
     *
     * @return null|string
     */
    public function getCorePersonFunction(): ?string
    {

        return $this->personFunction;
    }


    /**
     * Setter for `person_function` field value.
     *
     * @param null|string $personFunction Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setPersonFunction(?string $personFunction): Wfr2w8fsIJ3Item
    {

        return $this->setCorePersonFunction($personFunction);
    }

    /**
     * Core setter for `person_function` field value.
     *
     * @param null|string $personFunction Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCorePersonFunction(?string $personFunction): Wfr2w8fsIJ3Item
    {

        // Test value.
        $this->grabField('person_function')->isValueValid($personFunction);

        // If there is nothing to be changed.
        if ($this->personFunction === $personFunction) {
            return $this;
        }

        // Save.
        $this->personFunction = $personFunction;

        // Note that was set.
        $this->setFields[]     = 'person_function';
        $this->changedFields[] = 'person_function';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['person_function']) === false) {
            $this->fieldsValuesHistory['person_function'] = [];
        }
        $this->fieldsValuesHistory['person_function'][] = $personFunction;

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
     * @return Wfr2w8fsIJ3Item
     */
    public function setName(?string $name): Wfr2w8fsIJ3Item
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCoreName(?string $name): Wfr2w8fsIJ3Item
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
     * Getter for `phone` field value.
     *
     * @return null|string
     */
    public function getPhone(): ?string
    {

        return $this->getCorePhone(...func_get_args());
    }

    /**
     * Core getter for `phone` field value.
     *
     * @return null|string
     */
    public function getCorePhone(): ?string
    {

        return $this->phone;
    }


    /**
     * Setter for `phone` field value.
     *
     * @param null|string $phone Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setPhone(?string $phone): Wfr2w8fsIJ3Item
    {

        return $this->setCorePhone($phone);
    }

    /**
     * Core setter for `phone` field value.
     *
     * @param null|string $phone Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCorePhone(?string $phone): Wfr2w8fsIJ3Item
    {

        // Test value.
        $this->grabField('phone')->isValueValid($phone);

        // If there is nothing to be changed.
        if ($this->phone === $phone) {
            return $this;
        }

        // Save.
        $this->phone = $phone;

        // Note that was set.
        $this->setFields[]     = 'phone';
        $this->changedFields[] = 'phone';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['phone']) === false) {
            $this->fieldsValuesHistory['phone'] = [];
        }
        $this->fieldsValuesHistory['phone'][] = $phone;

        return $this;
    }

    /**
     * Getter for `email` field value.
     *
     * @return null|string
     */
    public function getEmail(): ?string
    {

        return $this->getCoreEmail(...func_get_args());
    }

    /**
     * Core getter for `email` field value.
     *
     * @return null|string
     */
    public function getCoreEmail(): ?string
    {

        return $this->email;
    }


    /**
     * Setter for `email` field value.
     *
     * @param null|string $email Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setEmail(?string $email): Wfr2w8fsIJ3Item
    {

        return $this->setCoreEmail($email);
    }

    /**
     * Core setter for `email` field value.
     *
     * @param null|string $email Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCoreEmail(?string $email): Wfr2w8fsIJ3Item
    {

        // Test value.
        $this->grabField('email')->isValueValid($email);

        // If there is nothing to be changed.
        if ($this->email === $email) {
            return $this;
        }

        // Save.
        $this->email = $email;

        // Note that was set.
        $this->setFields[]     = 'email';
        $this->changedFields[] = 'email';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['email']) === false) {
            $this->fieldsValuesHistory['email'] = [];
        }
        $this->fieldsValuesHistory['email'][] = $email;

        return $this;
    }

    /**
     * Getter for `monitoring_card_id` field value.
     *
     * @return null|integer
     */
    public function getMonitoringCardId(): ?int
    {

        return $this->getCoreMonitoringCardId(...func_get_args());
    }

    /**
     * Core getter for `monitoring_card_id` field value.
     *
     * @return null|integer
     */
    public function getCoreMonitoringCardId(): ?int
    {

        return $this->monitoringCardId;
    }


    /**
     * Setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setMonitoringCardId(?int $monitoringCardId): Wfr2w8fsIJ3Item
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return Wfr2w8fsIJ3Item
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): Wfr2w8fsIJ3Item
    {

        // Test value.
        $this->grabField('monitoring_card_id')->isValueValid($monitoringCardId);

        // If there is nothing to be changed.
        if ($this->monitoringCardId === $monitoringCardId) {
            return $this;
        }

        // Save.
        $this->monitoringCardId = $monitoringCardId;

        // Note that was set.
        $this->setFields[]     = 'monitoring_card_id';
        $this->changedFields[] = 'monitoring_card_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['monitoring_card_id']) === false) {
            $this->fieldsValuesHistory['monitoring_card_id'] = [];
        }
        $this->fieldsValuesHistory['monitoring_card_id'][] = $monitoringCardId;

        return $this;
    }
}
