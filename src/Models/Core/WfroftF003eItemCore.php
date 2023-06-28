<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfroftF003eItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfroftF003eCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfroftF003eItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfroftF003eItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfroftF003eItemCore extends Instance
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
     * Field `short_name`.
     *
     * @var null|string
     */
    private $shortName;

    /**
     * Field `email`.
     *
     * @var null|string
     */
    private $email;

    /**
     * Field `nip`.
     *
     * @var null|string
     */
    private $nip;

    /**
     * Field `regon`.
     *
     * @var null|string
     */
    private $regon;

    /**
     * Field `krs`.
     *
     * @var null|string
     */
    private $krs;

    /**
     * Field `street`.
     *
     * @var null|string
     */
    private $street;

    /**
     * Field `building_number`.
     *
     * @var null|string
     */
    private $buildingNumber;

    /**
     * Field `place_number`.
     *
     * @var null|string
     */
    private $placeNumber;

    /**
     * Field `post_code`.
     *
     * @var null|string
     */
    private $postCode;

    /**
     * Field `city`.
     *
     * @var null|string
     */
    private $city;

    /**
     * Field `province`.
     *
     * @var null|string
     */
    private $province;

    /**
     * Field `phone_number`.
     *
     * @var null|string
     */
    private $phoneNumber;

    /**
     * Field `type`.
     *
     * @var null|string
     */
    private $type;

    /**
     * Field `contact_person`.
     *
     * @var null|string
     */
    private $contactPerson;

    /**
     * Field `community`.
     *
     * @var null|string
     */
    private $community;

    /**
     * Field `county`.
     *
     * @var null|string
     */
    private $county;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfroftF003eItemModel::getInstance();

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
        if (isset($inject['short_name']) === true && $inject['short_name'] !== null) {
            $this->shortName = (string) $inject['short_name'];
        }
        if (isset($inject['email']) === true && $inject['email'] !== null) {
            $this->email = (string) $inject['email'];
        }
        if (isset($inject['nip']) === true && $inject['nip'] !== null) {
            $this->nip = (string) $inject['nip'];
        }
        if (isset($inject['regon']) === true && $inject['regon'] !== null) {
            $this->regon = (string) $inject['regon'];
        }
        if (isset($inject['krs']) === true && $inject['krs'] !== null) {
            $this->krs = (string) $inject['krs'];
        }
        if (isset($inject['street']) === true && $inject['street'] !== null) {
            $this->street = (string) $inject['street'];
        }
        if (isset($inject['building_number']) === true && $inject['building_number'] !== null) {
            $this->buildingNumber = (string) $inject['building_number'];
        }
        if (isset($inject['place_number']) === true && $inject['place_number'] !== null) {
            $this->placeNumber = (string) $inject['place_number'];
        }
        if (isset($inject['post_code']) === true && $inject['post_code'] !== null) {
            $this->postCode = (string) $inject['post_code'];
        }
        if (isset($inject['city']) === true && $inject['city'] !== null) {
            $this->city = (string) $inject['city'];
        }
        if (isset($inject['province']) === true && $inject['province'] !== null) {
            $this->province = (string) $inject['province'];
        }
        if (isset($inject['phone_number']) === true && $inject['phone_number'] !== null) {
            $this->phoneNumber = (string) $inject['phone_number'];
        }
        if (isset($inject['type']) === true && $inject['type'] !== null) {
            $this->type = (string) $inject['type'];
        }
        if (isset($inject['contact_person']) === true && $inject['contact_person'] !== null) {
            $this->contactPerson = (string) $inject['contact_person'];
        }
        if (isset($inject['community']) === true && $inject['community'] !== null) {
            $this->community = (string) $inject['community'];
        }
        if (isset($inject['county']) === true && $inject['county'] !== null) {
            $this->county = (string) $inject['county'];
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
     * @return WfroftF003eItem
     */
    public function setId(int $id): WfroftF003eItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreId(int $id): WfroftF003eItem
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
     * @return WfroftF003eItem
     */
    public function setName(?string $name): WfroftF003eItem
    {

        return $this->setCoreName($name);
    }

    /**
     * Core setter for `name` field value.
     *
     * @param null|string $name Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreName(?string $name): WfroftF003eItem
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
     * Getter for `short_name` field value.
     *
     * @return null|string
     */
    public function getShortName(): ?string
    {

        return $this->getCoreShortName(...func_get_args());
    }

    /**
     * Core getter for `short_name` field value.
     *
     * @return null|string
     */
    public function getCoreShortName(): ?string
    {

        return $this->shortName;
    }


    /**
     * Setter for `short_name` field value.
     *
     * @param null|string $shortName Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setShortName(?string $shortName): WfroftF003eItem
    {

        return $this->setCoreShortName($shortName);
    }

    /**
     * Core setter for `short_name` field value.
     *
     * @param null|string $shortName Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreShortName(?string $shortName): WfroftF003eItem
    {

        // Test value.
        $this->grabField('short_name')->isValueValid($shortName);

        // If there is nothing to be changed.
        if ($this->shortName === $shortName) {
            return $this;
        }

        // Save.
        $this->shortName = $shortName;

        // Note that was set.
        $this->setFields[]     = 'short_name';
        $this->changedFields[] = 'short_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['short_name']) === false) {
            $this->fieldsValuesHistory['short_name'] = [];
        }
        $this->fieldsValuesHistory['short_name'][] = $shortName;

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
     * @return WfroftF003eItem
     */
    public function setEmail(?string $email): WfroftF003eItem
    {

        return $this->setCoreEmail($email);
    }

    /**
     * Core setter for `email` field value.
     *
     * @param null|string $email Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreEmail(?string $email): WfroftF003eItem
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
     * Getter for `nip` field value.
     *
     * @return null|string
     */
    public function getNip(): ?string
    {

        return $this->getCoreNip(...func_get_args());
    }

    /**
     * Core getter for `nip` field value.
     *
     * @return null|string
     */
    public function getCoreNip(): ?string
    {

        return $this->nip;
    }


    /**
     * Setter for `nip` field value.
     *
     * @param null|string $nip Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setNip(?string $nip): WfroftF003eItem
    {

        return $this->setCoreNip($nip);
    }

    /**
     * Core setter for `nip` field value.
     *
     * @param null|string $nip Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreNip(?string $nip): WfroftF003eItem
    {

        // Test value.
        $this->grabField('nip')->isValueValid($nip);

        // If there is nothing to be changed.
        if ($this->nip === $nip) {
            return $this;
        }

        // Save.
        $this->nip = $nip;

        // Note that was set.
        $this->setFields[]     = 'nip';
        $this->changedFields[] = 'nip';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['nip']) === false) {
            $this->fieldsValuesHistory['nip'] = [];
        }
        $this->fieldsValuesHistory['nip'][] = $nip;

        return $this;
    }

    /**
     * Getter for `regon` field value.
     *
     * @return null|string
     */
    public function getRegon(): ?string
    {

        return $this->getCoreRegon(...func_get_args());
    }

    /**
     * Core getter for `regon` field value.
     *
     * @return null|string
     */
    public function getCoreRegon(): ?string
    {

        return $this->regon;
    }


    /**
     * Setter for `regon` field value.
     *
     * @param null|string $regon Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setRegon(?string $regon): WfroftF003eItem
    {

        return $this->setCoreRegon($regon);
    }

    /**
     * Core setter for `regon` field value.
     *
     * @param null|string $regon Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreRegon(?string $regon): WfroftF003eItem
    {

        // Test value.
        $this->grabField('regon')->isValueValid($regon);

        // If there is nothing to be changed.
        if ($this->regon === $regon) {
            return $this;
        }

        // Save.
        $this->regon = $regon;

        // Note that was set.
        $this->setFields[]     = 'regon';
        $this->changedFields[] = 'regon';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['regon']) === false) {
            $this->fieldsValuesHistory['regon'] = [];
        }
        $this->fieldsValuesHistory['regon'][] = $regon;

        return $this;
    }

    /**
     * Getter for `krs` field value.
     *
     * @return null|string
     */
    public function getKrs(): ?string
    {

        return $this->getCoreKrs(...func_get_args());
    }

    /**
     * Core getter for `krs` field value.
     *
     * @return null|string
     */
    public function getCoreKrs(): ?string
    {

        return $this->krs;
    }


    /**
     * Setter for `krs` field value.
     *
     * @param null|string $krs Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setKrs(?string $krs): WfroftF003eItem
    {

        return $this->setCoreKrs($krs);
    }

    /**
     * Core setter for `krs` field value.
     *
     * @param null|string $krs Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreKrs(?string $krs): WfroftF003eItem
    {

        // Test value.
        $this->grabField('krs')->isValueValid($krs);

        // If there is nothing to be changed.
        if ($this->krs === $krs) {
            return $this;
        }

        // Save.
        $this->krs = $krs;

        // Note that was set.
        $this->setFields[]     = 'krs';
        $this->changedFields[] = 'krs';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['krs']) === false) {
            $this->fieldsValuesHistory['krs'] = [];
        }
        $this->fieldsValuesHistory['krs'][] = $krs;

        return $this;
    }

    /**
     * Getter for `street` field value.
     *
     * @return null|string
     */
    public function getStreet(): ?string
    {

        return $this->getCoreStreet(...func_get_args());
    }

    /**
     * Core getter for `street` field value.
     *
     * @return null|string
     */
    public function getCoreStreet(): ?string
    {

        return $this->street;
    }


    /**
     * Setter for `street` field value.
     *
     * @param null|string $street Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setStreet(?string $street): WfroftF003eItem
    {

        return $this->setCoreStreet($street);
    }

    /**
     * Core setter for `street` field value.
     *
     * @param null|string $street Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreStreet(?string $street): WfroftF003eItem
    {

        // Test value.
        $this->grabField('street')->isValueValid($street);

        // If there is nothing to be changed.
        if ($this->street === $street) {
            return $this;
        }

        // Save.
        $this->street = $street;

        // Note that was set.
        $this->setFields[]     = 'street';
        $this->changedFields[] = 'street';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['street']) === false) {
            $this->fieldsValuesHistory['street'] = [];
        }
        $this->fieldsValuesHistory['street'][] = $street;

        return $this;
    }

    /**
     * Getter for `building_number` field value.
     *
     * @return null|string
     */
    public function getBuildingNumber(): ?string
    {

        return $this->getCoreBuildingNumber(...func_get_args());
    }

    /**
     * Core getter for `building_number` field value.
     *
     * @return null|string
     */
    public function getCoreBuildingNumber(): ?string
    {

        return $this->buildingNumber;
    }


    /**
     * Setter for `building_number` field value.
     *
     * @param null|string $buildingNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setBuildingNumber(?string $buildingNumber): WfroftF003eItem
    {

        return $this->setCoreBuildingNumber($buildingNumber);
    }

    /**
     * Core setter for `building_number` field value.
     *
     * @param null|string $buildingNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreBuildingNumber(?string $buildingNumber): WfroftF003eItem
    {

        // Test value.
        $this->grabField('building_number')->isValueValid($buildingNumber);

        // If there is nothing to be changed.
        if ($this->buildingNumber === $buildingNumber) {
            return $this;
        }

        // Save.
        $this->buildingNumber = $buildingNumber;

        // Note that was set.
        $this->setFields[]     = 'building_number';
        $this->changedFields[] = 'building_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['building_number']) === false) {
            $this->fieldsValuesHistory['building_number'] = [];
        }
        $this->fieldsValuesHistory['building_number'][] = $buildingNumber;

        return $this;
    }

    /**
     * Getter for `place_number` field value.
     *
     * @return null|string
     */
    public function getPlaceNumber(): ?string
    {

        return $this->getCorePlaceNumber(...func_get_args());
    }

    /**
     * Core getter for `place_number` field value.
     *
     * @return null|string
     */
    public function getCorePlaceNumber(): ?string
    {

        return $this->placeNumber;
    }


    /**
     * Setter for `place_number` field value.
     *
     * @param null|string $placeNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setPlaceNumber(?string $placeNumber): WfroftF003eItem
    {

        return $this->setCorePlaceNumber($placeNumber);
    }

    /**
     * Core setter for `place_number` field value.
     *
     * @param null|string $placeNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCorePlaceNumber(?string $placeNumber): WfroftF003eItem
    {

        // Test value.
        $this->grabField('place_number')->isValueValid($placeNumber);

        // If there is nothing to be changed.
        if ($this->placeNumber === $placeNumber) {
            return $this;
        }

        // Save.
        $this->placeNumber = $placeNumber;

        // Note that was set.
        $this->setFields[]     = 'place_number';
        $this->changedFields[] = 'place_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['place_number']) === false) {
            $this->fieldsValuesHistory['place_number'] = [];
        }
        $this->fieldsValuesHistory['place_number'][] = $placeNumber;

        return $this;
    }

    /**
     * Getter for `post_code` field value.
     *
     * @return null|string
     */
    public function getPostCode(): ?string
    {

        return $this->getCorePostCode(...func_get_args());
    }

    /**
     * Core getter for `post_code` field value.
     *
     * @return null|string
     */
    public function getCorePostCode(): ?string
    {

        return $this->postCode;
    }


    /**
     * Setter for `post_code` field value.
     *
     * @param null|string $postCode Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setPostCode(?string $postCode): WfroftF003eItem
    {

        return $this->setCorePostCode($postCode);
    }

    /**
     * Core setter for `post_code` field value.
     *
     * @param null|string $postCode Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCorePostCode(?string $postCode): WfroftF003eItem
    {

        // Test value.
        $this->grabField('post_code')->isValueValid($postCode);

        // If there is nothing to be changed.
        if ($this->postCode === $postCode) {
            return $this;
        }

        // Save.
        $this->postCode = $postCode;

        // Note that was set.
        $this->setFields[]     = 'post_code';
        $this->changedFields[] = 'post_code';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['post_code']) === false) {
            $this->fieldsValuesHistory['post_code'] = [];
        }
        $this->fieldsValuesHistory['post_code'][] = $postCode;

        return $this;
    }

    /**
     * Getter for `city` field value.
     *
     * @return null|string
     */
    public function getCity(): ?string
    {

        return $this->getCoreCity(...func_get_args());
    }

    /**
     * Core getter for `city` field value.
     *
     * @return null|string
     */
    public function getCoreCity(): ?string
    {

        return $this->city;
    }


    /**
     * Setter for `city` field value.
     *
     * @param null|string $city Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCity(?string $city): WfroftF003eItem
    {

        return $this->setCoreCity($city);
    }

    /**
     * Core setter for `city` field value.
     *
     * @param null|string $city Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreCity(?string $city): WfroftF003eItem
    {

        // Test value.
        $this->grabField('city')->isValueValid($city);

        // If there is nothing to be changed.
        if ($this->city === $city) {
            return $this;
        }

        // Save.
        $this->city = $city;

        // Note that was set.
        $this->setFields[]     = 'city';
        $this->changedFields[] = 'city';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['city']) === false) {
            $this->fieldsValuesHistory['city'] = [];
        }
        $this->fieldsValuesHistory['city'][] = $city;

        return $this;
    }

    /**
     * Getter for `province` field value.
     *
     * @return null|string
     */
    public function getProvince(): ?string
    {

        return $this->getCoreProvince(...func_get_args());
    }

    /**
     * Core getter for `province` field value.
     *
     * @return null|string
     */
    public function getCoreProvince(): ?string
    {

        return $this->province;
    }


    /**
     * Setter for `province` field value.
     *
     * @param null|string $province Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setProvince(?string $province): WfroftF003eItem
    {

        return $this->setCoreProvince($province);
    }

    /**
     * Core setter for `province` field value.
     *
     * @param null|string $province Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreProvince(?string $province): WfroftF003eItem
    {

        // Test value.
        $this->grabField('province')->isValueValid($province);

        // If there is nothing to be changed.
        if ($this->province === $province) {
            return $this;
        }

        // Save.
        $this->province = $province;

        // Note that was set.
        $this->setFields[]     = 'province';
        $this->changedFields[] = 'province';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['province']) === false) {
            $this->fieldsValuesHistory['province'] = [];
        }
        $this->fieldsValuesHistory['province'][] = $province;

        return $this;
    }

    /**
     * Getter for `phone_number` field value.
     *
     * @return null|string
     */
    public function getPhoneNumber(): ?string
    {

        return $this->getCorePhoneNumber(...func_get_args());
    }

    /**
     * Core getter for `phone_number` field value.
     *
     * @return null|string
     */
    public function getCorePhoneNumber(): ?string
    {

        return $this->phoneNumber;
    }


    /**
     * Setter for `phone_number` field value.
     *
     * @param null|string $phoneNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setPhoneNumber(?string $phoneNumber): WfroftF003eItem
    {

        return $this->setCorePhoneNumber($phoneNumber);
    }

    /**
     * Core setter for `phone_number` field value.
     *
     * @param null|string $phoneNumber Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCorePhoneNumber(?string $phoneNumber): WfroftF003eItem
    {

        // Test value.
        $this->grabField('phone_number')->isValueValid($phoneNumber);

        // If there is nothing to be changed.
        if ($this->phoneNumber === $phoneNumber) {
            return $this;
        }

        // Save.
        $this->phoneNumber = $phoneNumber;

        // Note that was set.
        $this->setFields[]     = 'phone_number';
        $this->changedFields[] = 'phone_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['phone_number']) === false) {
            $this->fieldsValuesHistory['phone_number'] = [];
        }
        $this->fieldsValuesHistory['phone_number'][] = $phoneNumber;

        return $this;
    }

    /**
     * Getter for `type` field value.
     *
     * @return null|string
     */
    public function getType(): ?string
    {

        return $this->getCoreType(...func_get_args());
    }

    /**
     * Core getter for `type` field value.
     *
     * @return null|string
     */
    public function getCoreType(): ?string
    {

        return $this->type;
    }


    /**
     * Setter for `type` field value.
     *
     * @param null|string $type Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setType(?string $type): WfroftF003eItem
    {

        return $this->setCoreType($type);
    }

    /**
     * Core setter for `type` field value.
     *
     * @param null|string $type Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreType(?string $type): WfroftF003eItem
    {

        // Test value.
        $this->grabField('type')->isValueValid($type);

        // If there is nothing to be changed.
        if ($this->type === $type) {
            return $this;
        }

        // Save.
        $this->type = $type;

        // Note that was set.
        $this->setFields[]     = 'type';
        $this->changedFields[] = 'type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['type']) === false) {
            $this->fieldsValuesHistory['type'] = [];
        }
        $this->fieldsValuesHistory['type'][] = $type;

        return $this;
    }

    /**
     * Getter for `contact_person` field value.
     *
     * @return null|string
     */
    public function getContactPerson(): ?string
    {

        return $this->getCoreContactPerson(...func_get_args());
    }

    /**
     * Core getter for `contact_person` field value.
     *
     * @return null|string
     */
    public function getCoreContactPerson(): ?string
    {

        return $this->contactPerson;
    }


    /**
     * Setter for `contact_person` field value.
     *
     * @param null|string $contactPerson Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setContactPerson(?string $contactPerson): WfroftF003eItem
    {

        return $this->setCoreContactPerson($contactPerson);
    }

    /**
     * Core setter for `contact_person` field value.
     *
     * @param null|string $contactPerson Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreContactPerson(?string $contactPerson): WfroftF003eItem
    {

        // Test value.
        $this->grabField('contact_person')->isValueValid($contactPerson);

        // If there is nothing to be changed.
        if ($this->contactPerson === $contactPerson) {
            return $this;
        }

        // Save.
        $this->contactPerson = $contactPerson;

        // Note that was set.
        $this->setFields[]     = 'contact_person';
        $this->changedFields[] = 'contact_person';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['contact_person']) === false) {
            $this->fieldsValuesHistory['contact_person'] = [];
        }
        $this->fieldsValuesHistory['contact_person'][] = $contactPerson;

        return $this;
    }

    /**
     * Getter for `community` field value.
     *
     * @return null|string
     */
    public function getCommunity(): ?string
    {

        return $this->getCoreCommunity(...func_get_args());
    }

    /**
     * Core getter for `community` field value.
     *
     * @return null|string
     */
    public function getCoreCommunity(): ?string
    {

        return $this->community;
    }


    /**
     * Setter for `community` field value.
     *
     * @param null|string $community Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCommunity(?string $community): WfroftF003eItem
    {

        return $this->setCoreCommunity($community);
    }

    /**
     * Core setter for `community` field value.
     *
     * @param null|string $community Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreCommunity(?string $community): WfroftF003eItem
    {

        // Test value.
        $this->grabField('community')->isValueValid($community);

        // If there is nothing to be changed.
        if ($this->community === $community) {
            return $this;
        }

        // Save.
        $this->community = $community;

        // Note that was set.
        $this->setFields[]     = 'community';
        $this->changedFields[] = 'community';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['community']) === false) {
            $this->fieldsValuesHistory['community'] = [];
        }
        $this->fieldsValuesHistory['community'][] = $community;

        return $this;
    }

    /**
     * Getter for `county` field value.
     *
     * @return null|string
     */
    public function getCounty(): ?string
    {

        return $this->getCoreCounty(...func_get_args());
    }

    /**
     * Core getter for `county` field value.
     *
     * @return null|string
     */
    public function getCoreCounty(): ?string
    {

        return $this->county;
    }


    /**
     * Setter for `county` field value.
     *
     * @param null|string $county Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCounty(?string $county): WfroftF003eItem
    {

        return $this->setCoreCounty($county);
    }

    /**
     * Core setter for `county` field value.
     *
     * @param null|string $county Value to be set.
     *
     * @return WfroftF003eItem
     */
    public function setCoreCounty(?string $county): WfroftF003eItem
    {

        // Test value.
        $this->grabField('county')->isValueValid($county);

        // If there is nothing to be changed.
        if ($this->county === $county) {
            return $this;
        }

        // Save.
        $this->county = $county;

        // Note that was set.
        $this->setFields[]     = 'county';
        $this->changedFields[] = 'county';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['county']) === false) {
            $this->fieldsValuesHistory['county'] = [];
        }
        $this->fieldsValuesHistory['county'][] = $county;

        return $this;
    }
}
