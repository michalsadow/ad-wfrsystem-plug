<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrQ6IoL8dDItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrQ6IoL8dDCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrQ6IoL8dDItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrQ6IoL8dDItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrQ6IoL8dDItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `entity_type`.
     *
     * @var null|string
     */
    private $entityType;

    /**
     * Field `name`.
     *
     * @var null|string
     */
    private $name;

    /**
     * Field `address`.
     *
     * @var null|string
     */
    private $address;

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
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

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
        $this->model = WfrQ6IoL8dDItemModel::getInstance();

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
        if (isset($inject['entity_type']) === true && $inject['entity_type'] !== null) {
            $this->entityType = (string) $inject['entity_type'];
        }
        if (isset($inject['name']) === true && $inject['name'] !== null) {
            $this->name = (string) $inject['name'];
        }
        if (isset($inject['address']) === true && $inject['address'] !== null) {
            $this->address = (string) $inject['address'];
        }
        if (isset($inject['phone']) === true && $inject['phone'] !== null) {
            $this->phone = (string) $inject['phone'];
        }
        if (isset($inject['email']) === true && $inject['email'] !== null) {
            $this->email = (string) $inject['email'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
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
     * @return WfrQ6IoL8dDItem
     */
    public function setId(int $id): WfrQ6IoL8dDItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreId(int $id): WfrQ6IoL8dDItem
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
     * Getter for `entity_type` field value.
     *
     * @return null|string
     */
    public function getEntityType(): ?string
    {

        return $this->getCoreEntityType(...func_get_args());
    }

    /**
     * Core getter for `entity_type` field value.
     *
     * @return null|string
     */
    public function getCoreEntityType(): ?string
    {

        return $this->entityType;
    }


    /**
     * Setter for `entity_type` field value.
     *
     * @param null|string $entityType Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setEntityType(?string $entityType): WfrQ6IoL8dDItem
    {

        return $this->setCoreEntityType($entityType);
    }

    /**
     * Core setter for `entity_type` field value.
     *
     * @param null|string $entityType Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreEntityType(?string $entityType): WfrQ6IoL8dDItem
    {

        // Test value.
        $this->grabField('entity_type')->isValueValid($entityType);

        // If there is nothing to be changed.
        if ($this->entityType === $entityType) {
            return $this;
        }

        // Save.
        $this->entityType = $entityType;

        // Note that was set.
        $this->setFields[]     = 'entity_type';
        $this->changedFields[] = 'entity_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['entity_type']) === false) {
            $this->fieldsValuesHistory['entity_type'] = [];
        }
        $this->fieldsValuesHistory['entity_type'][] = $entityType;

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
     * @return WfrQ6IoL8dDItem
     */
    public function setName(?string $name): WfrQ6IoL8dDItem
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreName(?string $name): WfrQ6IoL8dDItem
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
     * Getter for `address` field value.
     *
     * @return null|string
     */
    public function getAddress(): ?string
    {

        return $this->getCoreAddress(...func_get_args());
    }

    /**
     * Core getter for `address` field value.
     *
     * @return null|string
     */
    public function getCoreAddress(): ?string
    {

        return $this->address;
    }


    /**
     * Setter for `address` field value.
     *
     * @param null|string $address Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setAddress(?string $address): WfrQ6IoL8dDItem
    {

        return $this->setCoreAddress($address);
    }

    /**
     * Core setter for `address` field value.
     *
     * @param null|string $address Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreAddress(?string $address): WfrQ6IoL8dDItem
    {

        // Test value.
        $this->grabField('address')->isValueValid($address);

        // If there is nothing to be changed.
        if ($this->address === $address) {
            return $this;
        }

        // Save.
        $this->address = $address;

        // Note that was set.
        $this->setFields[]     = 'address';
        $this->changedFields[] = 'address';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['address']) === false) {
            $this->fieldsValuesHistory['address'] = [];
        }
        $this->fieldsValuesHistory['address'][] = $address;

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
     * @return WfrQ6IoL8dDItem
     */
    public function setPhone(?string $phone): WfrQ6IoL8dDItem
    {

        return $this->setCorePhone($phone);
    }

    /**
     * Core setter for `phone` field value.
     *
     * @param null|string $phone Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCorePhone(?string $phone): WfrQ6IoL8dDItem
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
     * @return WfrQ6IoL8dDItem
     */
    public function setEmail(?string $email): WfrQ6IoL8dDItem
    {

        return $this->setCoreEmail($email);
    }

    /**
     * Core setter for `email` field value.
     *
     * @param null|string $email Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreEmail(?string $email): WfrQ6IoL8dDItem
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
     * Getter for `comment` field value.
     *
     * @return null|string
     */
    public function getComment(): ?string
    {

        return $this->getCoreComment(...func_get_args());
    }

    /**
     * Core getter for `comment` field value.
     *
     * @return null|string
     */
    public function getCoreComment(): ?string
    {

        return $this->comment;
    }


    /**
     * Setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setComment(?string $comment): WfrQ6IoL8dDItem
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreComment(?string $comment): WfrQ6IoL8dDItem
    {

        // Test value.
        $this->grabField('comment')->isValueValid($comment);

        // If there is nothing to be changed.
        if ($this->comment === $comment) {
            return $this;
        }

        // Save.
        $this->comment = $comment;

        // Note that was set.
        $this->setFields[]     = 'comment';
        $this->changedFields[] = 'comment';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['comment']) === false) {
            $this->fieldsValuesHistory['comment'] = [];
        }
        $this->fieldsValuesHistory['comment'][] = $comment;

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
     * @return WfrQ6IoL8dDItem
     */
    public function setMonitoringCardId(?int $monitoringCardId): WfrQ6IoL8dDItem
    {

        return $this->setCoreMonitoringCardId($monitoringCardId);
    }

    /**
     * Core setter for `monitoring_card_id` field value.
     *
     * @param null|integer $monitoringCardId Value to be set.
     *
     * @return WfrQ6IoL8dDItem
     */
    public function setCoreMonitoringCardId(?int $monitoringCardId): WfrQ6IoL8dDItem
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
