<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrznzM3FUVItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrznzM3FUVCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrznzM3FUVItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrznzM3FUVItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrznzM3FUVItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `beneficiary_name`.
     *
     * @var null|string
     */
    private $beneficiaryName;

    /**
     * Field `beneficiary_post_code`.
     *
     * @var null|string
     */
    private $beneficiaryPostCode;

    /**
     * Field `beneficiary_province`.
     *
     * @var null|string
     */
    private $beneficiaryProvince;

    /**
     * Field `beneficiary_city`.
     *
     * @var null|string
     */
    private $beneficiaryCity;

    /**
     * Field `beneficiary_street`.
     *
     * @var null|string
     */
    private $beneficiaryStreet;

    /**
     * Field `beneficiary_building_number`.
     *
     * @var null|string
     */
    private $beneficiaryBuildingNumber;

    /**
     * Field `beneficiary_place_number`.
     *
     * @var null|string
     */
    private $beneficiaryPlaceNumber;

    /**
     * Field `beneficiary_regon`.
     *
     * @var null|string
     */
    private $beneficiaryRegon;

    /**
     * Field `beneficiary_nip`.
     *
     * @var null|string
     */
    private $beneficiaryNip;

    /**
     * Field `beneficiary_pkd`.
     *
     * @var null|string
     */
    private $beneficiaryPkd;

    /**
     * Field `beneficiary_type`.
     *
     * @var null|string
     */
    private $beneficiaryType;

    /**
     * Field `beneficiary_startup`.
     *
     * @var null|integer
     */
    private $beneficiaryStartup;

    /**
     * Field `start_date`.
     *
     * @var null|string
     */
    private $startDate;

    /**
     * Field `entry_date`.
     *
     * @var null|string
     */
    private $entryDate;

    /**
     * Field `validity_term_date`.
     *
     * @var null|string
     */
    private $validityTermDate;

    /**
     * Field `loan_number`.
     *
     * @var null|string
     */
    private $loanNumber;

    /**
     * Field `loan_destiny`.
     *
     * @var null|string
     */
    private $loanDestiny;

    /**
     * Field `leasing_agreement`.
     *
     * @var null|integer
     */
    private $leasingAgreement;

    /**
     * Field `amount`.
     *
     * @var null|float
     */
    private $amount;

    /**
     * Field `public_granted_amount`.
     *
     * @var null|float
     */
    private $publicGrantedAmount;

    /**
     * Field `pf_amount_participation`.
     *
     * @var null|float
     */
    private $pfAmountParticipation;

    /**
     * Field `pf_percent`.
     *
     * @var null|float
     */
    private $pfPercent;

    /**
     * Field `mf_amount_participation`.
     *
     * @var null|float
     */
    private $mfAmountParticipation;

    /**
     * Field `mf_percent`.
     *
     * @var null|float
     */
    private $mfPercent;

    /**
     * Field `condition`.
     *
     * @var null|string
     */
    private $condition;

    /**
     * Field `security_type`.
     *
     * @var null|string
     */
    private $securityType;

    /**
     * Field `security_comment`.
     *
     * @var null|string
     */
    private $securityComment;

    /**
     * Field `credit_number`.
     *
     * @var null|string
     */
    private $creditNumber;

    /**
     * Field `credit_amount`.
     *
     * @var null|float
     */
    private $creditAmount;

    /**
     * Field `credit_date`.
     *
     * @var null|string
     */
    private $creditDate;

    /**
     * Field `credit_validity_date`.
     *
     * @var null|string
     */
    private $creditValidityDate;

    /**
     * Field `comment`.
     *
     * @var null|string
     */
    private $comment;

    /**
     * Field `bank_id`.
     *
     * @var null|integer
     */
    private $bankId;

    /**
     * Field `beneficiary_id`.
     *
     * @var null|integer
     */
    private $beneficiaryId;

    /**
     * Field `operating_agreement_id`.
     *
     * @var null|integer
     */
    private $operatingAgreementId;

    /**
     * Field `base_constant_interest`.
     *
     * @var null|float
     */
    private $baseConstantInterest;

    /**
     * Field `interest`.
     *
     * @var null|string
     */
    private $interest;

    /**
     * Field `profit_interest`.
     *
     * @var null|float
     */
    private $profitInterest;

    /**
     * Field `total_interest`.
     *
     * @var null|float
     */
    private $totalInterest;

    /**
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrznzM3FUVItemModel::getInstance();

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
        if (isset($inject['beneficiary_name']) === true && $inject['beneficiary_name'] !== null) {
            $this->beneficiaryName = (string) $inject['beneficiary_name'];
        }
        if (isset($inject['beneficiary_post_code']) === true && $inject['beneficiary_post_code'] !== null) {
            $this->beneficiaryPostCode = (string) $inject['beneficiary_post_code'];
        }
        if (isset($inject['beneficiary_province']) === true && $inject['beneficiary_province'] !== null) {
            $this->beneficiaryProvince = (string) $inject['beneficiary_province'];
        }
        if (isset($inject['beneficiary_city']) === true && $inject['beneficiary_city'] !== null) {
            $this->beneficiaryCity = (string) $inject['beneficiary_city'];
        }
        if (isset($inject['beneficiary_street']) === true && $inject['beneficiary_street'] !== null) {
            $this->beneficiaryStreet = (string) $inject['beneficiary_street'];
        }
        if (isset($inject['beneficiary_building_number']) === true && $inject['beneficiary_building_number'] !== null) {
            $this->beneficiaryBuildingNumber = (string) $inject['beneficiary_building_number'];
        }
        if (isset($inject['beneficiary_place_number']) === true && $inject['beneficiary_place_number'] !== null) {
            $this->beneficiaryPlaceNumber = (string) $inject['beneficiary_place_number'];
        }
        if (isset($inject['beneficiary_regon']) === true && $inject['beneficiary_regon'] !== null) {
            $this->beneficiaryRegon = (string) $inject['beneficiary_regon'];
        }
        if (isset($inject['beneficiary_nip']) === true && $inject['beneficiary_nip'] !== null) {
            $this->beneficiaryNip = (string) $inject['beneficiary_nip'];
        }
        if (isset($inject['beneficiary_pkd']) === true && $inject['beneficiary_pkd'] !== null) {
            $this->beneficiaryPkd = (string) $inject['beneficiary_pkd'];
        }
        if (isset($inject['beneficiary_type']) === true && $inject['beneficiary_type'] !== null) {
            $this->beneficiaryType = (string) $inject['beneficiary_type'];
        }
        if (isset($inject['beneficiary_startup']) === true && $inject['beneficiary_startup'] !== null) {
            $this->beneficiaryStartup = (int) $inject['beneficiary_startup'];
        }
        if (isset($inject['start_date']) === true && $inject['start_date'] !== null) {
            $this->startDate = (string) $inject['start_date'];
        }
        if (isset($inject['entry_date']) === true && $inject['entry_date'] !== null) {
            $this->entryDate = (string) $inject['entry_date'];
        }
        if (isset($inject['validity_term_date']) === true && $inject['validity_term_date'] !== null) {
            $this->validityTermDate = (string) $inject['validity_term_date'];
        }
        if (isset($inject['loan_number']) === true && $inject['loan_number'] !== null) {
            $this->loanNumber = (string) $inject['loan_number'];
        }
        if (isset($inject['loan_destiny']) === true && $inject['loan_destiny'] !== null) {
            $this->loanDestiny = (string) $inject['loan_destiny'];
        }
        if (isset($inject['leasing_agreement']) === true && $inject['leasing_agreement'] !== null) {
            $this->leasingAgreement = (int) $inject['leasing_agreement'];
        }
        if (isset($inject['amount']) === true && $inject['amount'] !== null) {
            $this->amount = (float) $inject['amount'];
        }
        if (isset($inject['public_granted_amount']) === true && $inject['public_granted_amount'] !== null) {
            $this->publicGrantedAmount = (float) $inject['public_granted_amount'];
        }
        if (isset($inject['pf_amount_participation']) === true && $inject['pf_amount_participation'] !== null) {
            $this->pfAmountParticipation = (float) $inject['pf_amount_participation'];
        }
        if (isset($inject['pf_percent']) === true && $inject['pf_percent'] !== null) {
            $this->pfPercent = (float) $inject['pf_percent'];
        }
        if (isset($inject['mf_amount_participation']) === true && $inject['mf_amount_participation'] !== null) {
            $this->mfAmountParticipation = (float) $inject['mf_amount_participation'];
        }
        if (isset($inject['mf_percent']) === true && $inject['mf_percent'] !== null) {
            $this->mfPercent = (float) $inject['mf_percent'];
        }
        if (isset($inject['condition']) === true && $inject['condition'] !== null) {
            $this->condition = (string) $inject['condition'];
        }
        if (isset($inject['security_type']) === true && $inject['security_type'] !== null) {
            $this->securityType = (string) $inject['security_type'];
        }
        if (isset($inject['security_comment']) === true && $inject['security_comment'] !== null) {
            $this->securityComment = (string) $inject['security_comment'];
        }
        if (isset($inject['credit_number']) === true && $inject['credit_number'] !== null) {
            $this->creditNumber = (string) $inject['credit_number'];
        }
        if (isset($inject['credit_amount']) === true && $inject['credit_amount'] !== null) {
            $this->creditAmount = (float) $inject['credit_amount'];
        }
        if (isset($inject['credit_date']) === true && $inject['credit_date'] !== null) {
            $this->creditDate = (string) $inject['credit_date'];
        }
        if (isset($inject['credit_validity_date']) === true && $inject['credit_validity_date'] !== null) {
            $this->creditValidityDate = (string) $inject['credit_validity_date'];
        }
        if (isset($inject['comment']) === true && $inject['comment'] !== null) {
            $this->comment = (string) $inject['comment'];
        }
        if (isset($inject['bank_id']) === true && $inject['bank_id'] !== null) {
            $this->bankId = (int) $inject['bank_id'];
        }
        if (isset($inject['beneficiary_id']) === true && $inject['beneficiary_id'] !== null) {
            $this->beneficiaryId = (int) $inject['beneficiary_id'];
        }
        if (isset($inject['operating_agreement_id']) === true && $inject['operating_agreement_id'] !== null) {
            $this->operatingAgreementId = (int) $inject['operating_agreement_id'];
        }
        if (isset($inject['base_constant_interest']) === true && $inject['base_constant_interest'] !== null) {
            $this->baseConstantInterest = (float) $inject['base_constant_interest'];
        }
        if (isset($inject['interest']) === true && $inject['interest'] !== null) {
            $this->interest = (string) $inject['interest'];
        }
        if (isset($inject['profit_interest']) === true && $inject['profit_interest'] !== null) {
            $this->profitInterest = (float) $inject['profit_interest'];
        }
        if (isset($inject['total_interest']) === true && $inject['total_interest'] !== null) {
            $this->totalInterest = (float) $inject['total_interest'];
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
     * @return WfrznzM3FUVItem
     */
    public function setId(int $id): WfrznzM3FUVItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreId(int $id): WfrznzM3FUVItem
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
     * Getter for `beneficiary_name` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryName(): ?string
    {

        return $this->getCoreBeneficiaryName(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_name` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryName(): ?string
    {

        return $this->beneficiaryName;
    }


    /**
     * Setter for `beneficiary_name` field value.
     *
     * @param null|string $beneficiaryName Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryName(?string $beneficiaryName): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryName($beneficiaryName);
    }

    /**
     * Core setter for `beneficiary_name` field value.
     *
     * @param null|string $beneficiaryName Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryName(?string $beneficiaryName): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_name')->isValueValid($beneficiaryName);

        // If there is nothing to be changed.
        if ($this->beneficiaryName === $beneficiaryName) {
            return $this;
        }

        // Save.
        $this->beneficiaryName = $beneficiaryName;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_name';
        $this->changedFields[] = 'beneficiary_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_name']) === false) {
            $this->fieldsValuesHistory['beneficiary_name'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_name'][] = $beneficiaryName;

        return $this;
    }

    /**
     * Getter for `beneficiary_post_code` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryPostCode(): ?string
    {

        return $this->getCoreBeneficiaryPostCode(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_post_code` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryPostCode(): ?string
    {

        return $this->beneficiaryPostCode;
    }


    /**
     * Setter for `beneficiary_post_code` field value.
     *
     * @param null|string $beneficiaryPostCode Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryPostCode(?string $beneficiaryPostCode): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryPostCode($beneficiaryPostCode);
    }

    /**
     * Core setter for `beneficiary_post_code` field value.
     *
     * @param null|string $beneficiaryPostCode Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryPostCode(?string $beneficiaryPostCode): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_post_code')->isValueValid($beneficiaryPostCode);

        // If there is nothing to be changed.
        if ($this->beneficiaryPostCode === $beneficiaryPostCode) {
            return $this;
        }

        // Save.
        $this->beneficiaryPostCode = $beneficiaryPostCode;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_post_code';
        $this->changedFields[] = 'beneficiary_post_code';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_post_code']) === false) {
            $this->fieldsValuesHistory['beneficiary_post_code'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_post_code'][] = $beneficiaryPostCode;

        return $this;
    }

    /**
     * Getter for `beneficiary_province` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryProvince(): ?string
    {

        return $this->getCoreBeneficiaryProvince(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_province` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryProvince(): ?string
    {

        return $this->beneficiaryProvince;
    }


    /**
     * Setter for `beneficiary_province` field value.
     *
     * @param null|string $beneficiaryProvince Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryProvince(?string $beneficiaryProvince): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryProvince($beneficiaryProvince);
    }

    /**
     * Core setter for `beneficiary_province` field value.
     *
     * @param null|string $beneficiaryProvince Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryProvince(?string $beneficiaryProvince): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_province')->isValueValid($beneficiaryProvince);

        // If there is nothing to be changed.
        if ($this->beneficiaryProvince === $beneficiaryProvince) {
            return $this;
        }

        // Save.
        $this->beneficiaryProvince = $beneficiaryProvince;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_province';
        $this->changedFields[] = 'beneficiary_province';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_province']) === false) {
            $this->fieldsValuesHistory['beneficiary_province'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_province'][] = $beneficiaryProvince;

        return $this;
    }

    /**
     * Getter for `beneficiary_city` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryCity(): ?string
    {

        return $this->getCoreBeneficiaryCity(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_city` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryCity(): ?string
    {

        return $this->beneficiaryCity;
    }


    /**
     * Setter for `beneficiary_city` field value.
     *
     * @param null|string $beneficiaryCity Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryCity(?string $beneficiaryCity): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryCity($beneficiaryCity);
    }

    /**
     * Core setter for `beneficiary_city` field value.
     *
     * @param null|string $beneficiaryCity Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryCity(?string $beneficiaryCity): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_city')->isValueValid($beneficiaryCity);

        // If there is nothing to be changed.
        if ($this->beneficiaryCity === $beneficiaryCity) {
            return $this;
        }

        // Save.
        $this->beneficiaryCity = $beneficiaryCity;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_city';
        $this->changedFields[] = 'beneficiary_city';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_city']) === false) {
            $this->fieldsValuesHistory['beneficiary_city'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_city'][] = $beneficiaryCity;

        return $this;
    }

    /**
     * Getter for `beneficiary_street` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryStreet(): ?string
    {

        return $this->getCoreBeneficiaryStreet(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_street` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryStreet(): ?string
    {

        return $this->beneficiaryStreet;
    }


    /**
     * Setter for `beneficiary_street` field value.
     *
     * @param null|string $beneficiaryStreet Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryStreet(?string $beneficiaryStreet): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryStreet($beneficiaryStreet);
    }

    /**
     * Core setter for `beneficiary_street` field value.
     *
     * @param null|string $beneficiaryStreet Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryStreet(?string $beneficiaryStreet): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_street')->isValueValid($beneficiaryStreet);

        // If there is nothing to be changed.
        if ($this->beneficiaryStreet === $beneficiaryStreet) {
            return $this;
        }

        // Save.
        $this->beneficiaryStreet = $beneficiaryStreet;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_street';
        $this->changedFields[] = 'beneficiary_street';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_street']) === false) {
            $this->fieldsValuesHistory['beneficiary_street'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_street'][] = $beneficiaryStreet;

        return $this;
    }

    /**
     * Getter for `beneficiary_building_number` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryBuildingNumber(): ?string
    {

        return $this->getCoreBeneficiaryBuildingNumber(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_building_number` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryBuildingNumber(): ?string
    {

        return $this->beneficiaryBuildingNumber;
    }


    /**
     * Setter for `beneficiary_building_number` field value.
     *
     * @param null|string $beneficiaryBuildingNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryBuildingNumber(?string $beneficiaryBuildingNumber): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryBuildingNumber($beneficiaryBuildingNumber);
    }

    /**
     * Core setter for `beneficiary_building_number` field value.
     *
     * @param null|string $beneficiaryBuildingNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryBuildingNumber(?string $beneficiaryBuildingNumber): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_building_number')->isValueValid($beneficiaryBuildingNumber);

        // If there is nothing to be changed.
        if ($this->beneficiaryBuildingNumber === $beneficiaryBuildingNumber) {
            return $this;
        }

        // Save.
        $this->beneficiaryBuildingNumber = $beneficiaryBuildingNumber;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_building_number';
        $this->changedFields[] = 'beneficiary_building_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_building_number']) === false) {
            $this->fieldsValuesHistory['beneficiary_building_number'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_building_number'][] = $beneficiaryBuildingNumber;

        return $this;
    }

    /**
     * Getter for `beneficiary_place_number` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryPlaceNumber(): ?string
    {

        return $this->getCoreBeneficiaryPlaceNumber(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_place_number` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryPlaceNumber(): ?string
    {

        return $this->beneficiaryPlaceNumber;
    }


    /**
     * Setter for `beneficiary_place_number` field value.
     *
     * @param null|string $beneficiaryPlaceNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryPlaceNumber(?string $beneficiaryPlaceNumber): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryPlaceNumber($beneficiaryPlaceNumber);
    }

    /**
     * Core setter for `beneficiary_place_number` field value.
     *
     * @param null|string $beneficiaryPlaceNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryPlaceNumber(?string $beneficiaryPlaceNumber): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_place_number')->isValueValid($beneficiaryPlaceNumber);

        // If there is nothing to be changed.
        if ($this->beneficiaryPlaceNumber === $beneficiaryPlaceNumber) {
            return $this;
        }

        // Save.
        $this->beneficiaryPlaceNumber = $beneficiaryPlaceNumber;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_place_number';
        $this->changedFields[] = 'beneficiary_place_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_place_number']) === false) {
            $this->fieldsValuesHistory['beneficiary_place_number'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_place_number'][] = $beneficiaryPlaceNumber;

        return $this;
    }

    /**
     * Getter for `beneficiary_regon` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryRegon(): ?string
    {

        return $this->getCoreBeneficiaryRegon(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_regon` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryRegon(): ?string
    {

        return $this->beneficiaryRegon;
    }


    /**
     * Setter for `beneficiary_regon` field value.
     *
     * @param null|string $beneficiaryRegon Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryRegon(?string $beneficiaryRegon): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryRegon($beneficiaryRegon);
    }

    /**
     * Core setter for `beneficiary_regon` field value.
     *
     * @param null|string $beneficiaryRegon Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryRegon(?string $beneficiaryRegon): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_regon')->isValueValid($beneficiaryRegon);

        // If there is nothing to be changed.
        if ($this->beneficiaryRegon === $beneficiaryRegon) {
            return $this;
        }

        // Save.
        $this->beneficiaryRegon = $beneficiaryRegon;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_regon';
        $this->changedFields[] = 'beneficiary_regon';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_regon']) === false) {
            $this->fieldsValuesHistory['beneficiary_regon'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_regon'][] = $beneficiaryRegon;

        return $this;
    }

    /**
     * Getter for `beneficiary_nip` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryNip(): ?string
    {

        return $this->getCoreBeneficiaryNip(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_nip` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryNip(): ?string
    {

        return $this->beneficiaryNip;
    }


    /**
     * Setter for `beneficiary_nip` field value.
     *
     * @param null|string $beneficiaryNip Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryNip(?string $beneficiaryNip): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryNip($beneficiaryNip);
    }

    /**
     * Core setter for `beneficiary_nip` field value.
     *
     * @param null|string $beneficiaryNip Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryNip(?string $beneficiaryNip): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_nip')->isValueValid($beneficiaryNip);

        // If there is nothing to be changed.
        if ($this->beneficiaryNip === $beneficiaryNip) {
            return $this;
        }

        // Save.
        $this->beneficiaryNip = $beneficiaryNip;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_nip';
        $this->changedFields[] = 'beneficiary_nip';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_nip']) === false) {
            $this->fieldsValuesHistory['beneficiary_nip'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_nip'][] = $beneficiaryNip;

        return $this;
    }

    /**
     * Getter for `beneficiary_pkd` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryPkd(): ?string
    {

        return $this->getCoreBeneficiaryPkd(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_pkd` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryPkd(): ?string
    {

        return $this->beneficiaryPkd;
    }


    /**
     * Setter for `beneficiary_pkd` field value.
     *
     * @param null|string $beneficiaryPkd Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryPkd(?string $beneficiaryPkd): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryPkd($beneficiaryPkd);
    }

    /**
     * Core setter for `beneficiary_pkd` field value.
     *
     * @param null|string $beneficiaryPkd Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryPkd(?string $beneficiaryPkd): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_pkd')->isValueValid($beneficiaryPkd);

        // If there is nothing to be changed.
        if ($this->beneficiaryPkd === $beneficiaryPkd) {
            return $this;
        }

        // Save.
        $this->beneficiaryPkd = $beneficiaryPkd;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_pkd';
        $this->changedFields[] = 'beneficiary_pkd';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_pkd']) === false) {
            $this->fieldsValuesHistory['beneficiary_pkd'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_pkd'][] = $beneficiaryPkd;

        return $this;
    }

    /**
     * Getter for `beneficiary_type` field value.
     *
     * @return null|string
     */
    public function getBeneficiaryType(): ?string
    {

        return $this->getCoreBeneficiaryType(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_type` field value.
     *
     * @return null|string
     */
    public function getCoreBeneficiaryType(): ?string
    {

        return $this->beneficiaryType;
    }


    /**
     * Setter for `beneficiary_type` field value.
     *
     * @param null|string $beneficiaryType Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryType(?string $beneficiaryType): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryType($beneficiaryType);
    }

    /**
     * Core setter for `beneficiary_type` field value.
     *
     * @param null|string $beneficiaryType Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryType(?string $beneficiaryType): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_type')->isValueValid($beneficiaryType);

        // If there is nothing to be changed.
        if ($this->beneficiaryType === $beneficiaryType) {
            return $this;
        }

        // Save.
        $this->beneficiaryType = $beneficiaryType;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_type';
        $this->changedFields[] = 'beneficiary_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_type']) === false) {
            $this->fieldsValuesHistory['beneficiary_type'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_type'][] = $beneficiaryType;

        return $this;
    }

    /**
     * Getter for `beneficiary_startup` field value.
     *
     * @return null|integer
     */
    public function getBeneficiaryStartup(): ?int
    {

        return $this->getCoreBeneficiaryStartup(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_startup` field value.
     *
     * @return null|integer
     */
    public function getCoreBeneficiaryStartup(): ?int
    {

        return $this->beneficiaryStartup;
    }


    /**
     * Setter for `beneficiary_startup` field value.
     *
     * @param null|integer $beneficiaryStartup Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryStartup(?int $beneficiaryStartup): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryStartup($beneficiaryStartup);
    }

    /**
     * Core setter for `beneficiary_startup` field value.
     *
     * @param null|integer $beneficiaryStartup Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryStartup(?int $beneficiaryStartup): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_startup')->isValueValid($beneficiaryStartup);

        // If there is nothing to be changed.
        if ($this->beneficiaryStartup === $beneficiaryStartup) {
            return $this;
        }

        // Save.
        $this->beneficiaryStartup = $beneficiaryStartup;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_startup';
        $this->changedFields[] = 'beneficiary_startup';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_startup']) === false) {
            $this->fieldsValuesHistory['beneficiary_startup'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_startup'][] = $beneficiaryStartup;

        return $this;
    }

    /**
     * Getter for `start_date` field value.
     *
     * @return null|string
     */
    public function getStartDate(): ?string
    {

        return $this->getCoreStartDate(...func_get_args());
    }

    /**
     * Core getter for `start_date` field value.
     *
     * @return null|string
     */
    public function getCoreStartDate(): ?string
    {

        if (empty($this->startDate) === true) {
            $this->startDate = null;
        }

        if ($this->startDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('start_date')
                ->formatToExcel($this->startDate);
        }

        return $this->startDate;
    }


    /**
     * Setter for `start_date` field value.
     *
     * @param null|string $startDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setStartDate(?string $startDate): WfrznzM3FUVItem
    {

        return $this->setCoreStartDate($startDate);
    }

    /**
     * Core setter for `start_date` field value.
     *
     * @param null|string $startDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreStartDate(?string $startDate): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('start_date')->isValueValid($startDate);

        // If there is nothing to be changed.
        if ($this->startDate === $startDate) {
            return $this;
        }

        // Save.
        $this->startDate = $startDate;

        // Note that was set.
        $this->setFields[]     = 'start_date';
        $this->changedFields[] = 'start_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['start_date']) === false) {
            $this->fieldsValuesHistory['start_date'] = [];
        }
        $this->fieldsValuesHistory['start_date'][] = $startDate;

        return $this;
    }

    /**
     * Getter for `entry_date` field value.
     *
     * @return null|string
     */
    public function getEntryDate(): ?string
    {

        return $this->getCoreEntryDate(...func_get_args());
    }

    /**
     * Core getter for `entry_date` field value.
     *
     * @return null|string
     */
    public function getCoreEntryDate(): ?string
    {

        if (empty($this->entryDate) === true) {
            $this->entryDate = null;
        }

        if ($this->entryDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('entry_date')
                ->formatToExcel($this->entryDate);
        }

        return $this->entryDate;
    }


    /**
     * Setter for `entry_date` field value.
     *
     * @param null|string $entryDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setEntryDate(?string $entryDate): WfrznzM3FUVItem
    {

        return $this->setCoreEntryDate($entryDate);
    }

    /**
     * Core setter for `entry_date` field value.
     *
     * @param null|string $entryDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreEntryDate(?string $entryDate): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('entry_date')->isValueValid($entryDate);

        // If there is nothing to be changed.
        if ($this->entryDate === $entryDate) {
            return $this;
        }

        // Save.
        $this->entryDate = $entryDate;

        // Note that was set.
        $this->setFields[]     = 'entry_date';
        $this->changedFields[] = 'entry_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['entry_date']) === false) {
            $this->fieldsValuesHistory['entry_date'] = [];
        }
        $this->fieldsValuesHistory['entry_date'][] = $entryDate;

        return $this;
    }

    /**
     * Getter for `validity_term_date` field value.
     *
     * @return null|string
     */
    public function getValidityTermDate(): ?string
    {

        return $this->getCoreValidityTermDate(...func_get_args());
    }

    /**
     * Core getter for `validity_term_date` field value.
     *
     * @return null|string
     */
    public function getCoreValidityTermDate(): ?string
    {

        if (empty($this->validityTermDate) === true) {
            $this->validityTermDate = null;
        }

        if ($this->validityTermDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('validity_term_date')
                ->formatToExcel($this->validityTermDate);
        }

        return $this->validityTermDate;
    }


    /**
     * Setter for `validity_term_date` field value.
     *
     * @param null|string $validityTermDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setValidityTermDate(?string $validityTermDate): WfrznzM3FUVItem
    {

        return $this->setCoreValidityTermDate($validityTermDate);
    }

    /**
     * Core setter for `validity_term_date` field value.
     *
     * @param null|string $validityTermDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreValidityTermDate(?string $validityTermDate): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('validity_term_date')->isValueValid($validityTermDate);

        // If there is nothing to be changed.
        if ($this->validityTermDate === $validityTermDate) {
            return $this;
        }

        // Save.
        $this->validityTermDate = $validityTermDate;

        // Note that was set.
        $this->setFields[]     = 'validity_term_date';
        $this->changedFields[] = 'validity_term_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['validity_term_date']) === false) {
            $this->fieldsValuesHistory['validity_term_date'] = [];
        }
        $this->fieldsValuesHistory['validity_term_date'][] = $validityTermDate;

        return $this;
    }

    /**
     * Getter for `loan_number` field value.
     *
     * @return null|string
     */
    public function getLoanNumber(): ?string
    {

        return $this->getCoreLoanNumber(...func_get_args());
    }

    /**
     * Core getter for `loan_number` field value.
     *
     * @return null|string
     */
    public function getCoreLoanNumber(): ?string
    {

        return $this->loanNumber;
    }


    /**
     * Setter for `loan_number` field value.
     *
     * @param null|string $loanNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setLoanNumber(?string $loanNumber): WfrznzM3FUVItem
    {

        return $this->setCoreLoanNumber($loanNumber);
    }

    /**
     * Core setter for `loan_number` field value.
     *
     * @param null|string $loanNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreLoanNumber(?string $loanNumber): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('loan_number')->isValueValid($loanNumber);

        // If there is nothing to be changed.
        if ($this->loanNumber === $loanNumber) {
            return $this;
        }

        // Save.
        $this->loanNumber = $loanNumber;

        // Note that was set.
        $this->setFields[]     = 'loan_number';
        $this->changedFields[] = 'loan_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['loan_number']) === false) {
            $this->fieldsValuesHistory['loan_number'] = [];
        }
        $this->fieldsValuesHistory['loan_number'][] = $loanNumber;

        return $this;
    }

    /**
     * Getter for `loan_destiny` field value.
     *
     * @return null|string
     */
    public function getLoanDestiny(): ?string
    {

        return $this->getCoreLoanDestiny(...func_get_args());
    }

    /**
     * Core getter for `loan_destiny` field value.
     *
     * @return null|string
     */
    public function getCoreLoanDestiny(): ?string
    {

        return $this->loanDestiny;
    }


    /**
     * Setter for `loan_destiny` field value.
     *
     * @param null|string $loanDestiny Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setLoanDestiny(?string $loanDestiny): WfrznzM3FUVItem
    {

        return $this->setCoreLoanDestiny($loanDestiny);
    }

    /**
     * Core setter for `loan_destiny` field value.
     *
     * @param null|string $loanDestiny Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreLoanDestiny(?string $loanDestiny): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('loan_destiny')->isValueValid($loanDestiny);

        // If there is nothing to be changed.
        if ($this->loanDestiny === $loanDestiny) {
            return $this;
        }

        // Save.
        $this->loanDestiny = $loanDestiny;

        // Note that was set.
        $this->setFields[]     = 'loan_destiny';
        $this->changedFields[] = 'loan_destiny';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['loan_destiny']) === false) {
            $this->fieldsValuesHistory['loan_destiny'] = [];
        }
        $this->fieldsValuesHistory['loan_destiny'][] = $loanDestiny;

        return $this;
    }

    /**
     * Getter for `leasing_agreement` field value.
     *
     * @return null|integer
     */
    public function getLeasingAgreement(): ?int
    {

        return $this->getCoreLeasingAgreement(...func_get_args());
    }

    /**
     * Core getter for `leasing_agreement` field value.
     *
     * @return null|integer
     */
    public function getCoreLeasingAgreement(): ?int
    {

        return $this->leasingAgreement;
    }


    /**
     * Setter for `leasing_agreement` field value.
     *
     * @param null|integer $leasingAgreement Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setLeasingAgreement(?int $leasingAgreement): WfrznzM3FUVItem
    {

        return $this->setCoreLeasingAgreement($leasingAgreement);
    }

    /**
     * Core setter for `leasing_agreement` field value.
     *
     * @param null|integer $leasingAgreement Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreLeasingAgreement(?int $leasingAgreement): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('leasing_agreement')->isValueValid($leasingAgreement);

        // If there is nothing to be changed.
        if ($this->leasingAgreement === $leasingAgreement) {
            return $this;
        }

        // Save.
        $this->leasingAgreement = $leasingAgreement;

        // Note that was set.
        $this->setFields[]     = 'leasing_agreement';
        $this->changedFields[] = 'leasing_agreement';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['leasing_agreement']) === false) {
            $this->fieldsValuesHistory['leasing_agreement'] = [];
        }
        $this->fieldsValuesHistory['leasing_agreement'][] = $leasingAgreement;

        return $this;
    }

    /**
     * Getter for `amount` field value.
     *
     * @return null|float
     */
    public function getAmount(): ?float
    {

        return $this->getCoreAmount(...func_get_args());
    }

    /**
     * Core getter for `amount` field value.
     *
     * @return null|float
     */
    public function getCoreAmount(): ?float
    {

        return $this->amount;
    }


    /**
     * Setter for `amount` field value.
     *
     * @param null|float $amount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setAmount(?float $amount): WfrznzM3FUVItem
    {

        return $this->setCoreAmount($amount);
    }

    /**
     * Core setter for `amount` field value.
     *
     * @param null|float $amount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreAmount(?float $amount): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('amount')->isValueValid($amount);

        // If there is nothing to be changed.
        if (
            $this->amount === $amount
            || (string) $this->amount === (string) $amount
        ) {
            return $this;
        }

        // Save.
        $this->amount = $amount;

        // Note that was set.
        $this->setFields[]     = 'amount';
        $this->changedFields[] = 'amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['amount']) === false) {
            $this->fieldsValuesHistory['amount'] = [];
        }
        $this->fieldsValuesHistory['amount'][] = $amount;

        return $this;
    }

    /**
     * Getter for `public_granted_amount` field value.
     *
     * @return null|float
     */
    public function getPublicGrantedAmount(): ?float
    {

        return $this->getCorePublicGrantedAmount(...func_get_args());
    }

    /**
     * Core getter for `public_granted_amount` field value.
     *
     * @return null|float
     */
    public function getCorePublicGrantedAmount(): ?float
    {

        return $this->publicGrantedAmount;
    }


    /**
     * Setter for `public_granted_amount` field value.
     *
     * @param null|float $publicGrantedAmount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setPublicGrantedAmount(?float $publicGrantedAmount): WfrznzM3FUVItem
    {

        return $this->setCorePublicGrantedAmount($publicGrantedAmount);
    }

    /**
     * Core setter for `public_granted_amount` field value.
     *
     * @param null|float $publicGrantedAmount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCorePublicGrantedAmount(?float $publicGrantedAmount): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('public_granted_amount')->isValueValid($publicGrantedAmount);

        // If there is nothing to be changed.
        if (
            $this->publicGrantedAmount === $publicGrantedAmount
            || (string) $this->publicGrantedAmount === (string) $publicGrantedAmount
        ) {
            return $this;
        }

        // Save.
        $this->publicGrantedAmount = $publicGrantedAmount;

        // Note that was set.
        $this->setFields[]     = 'public_granted_amount';
        $this->changedFields[] = 'public_granted_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['public_granted_amount']) === false) {
            $this->fieldsValuesHistory['public_granted_amount'] = [];
        }
        $this->fieldsValuesHistory['public_granted_amount'][] = $publicGrantedAmount;

        return $this;
    }

    /**
     * Getter for `pf_amount_participation` field value.
     *
     * @return null|float
     */
    public function getPfAmountParticipation(): ?float
    {

        return $this->getCorePfAmountParticipation(...func_get_args());
    }

    /**
     * Core getter for `pf_amount_participation` field value.
     *
     * @return null|float
     */
    public function getCorePfAmountParticipation(): ?float
    {

        return $this->pfAmountParticipation;
    }


    /**
     * Setter for `pf_amount_participation` field value.
     *
     * @param null|float $pfAmountParticipation Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setPfAmountParticipation(?float $pfAmountParticipation): WfrznzM3FUVItem
    {

        return $this->setCorePfAmountParticipation($pfAmountParticipation);
    }

    /**
     * Core setter for `pf_amount_participation` field value.
     *
     * @param null|float $pfAmountParticipation Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCorePfAmountParticipation(?float $pfAmountParticipation): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('pf_amount_participation')->isValueValid($pfAmountParticipation);

        // If there is nothing to be changed.
        if (
            $this->pfAmountParticipation === $pfAmountParticipation
            || (string) $this->pfAmountParticipation === (string) $pfAmountParticipation
        ) {
            return $this;
        }

        // Save.
        $this->pfAmountParticipation = $pfAmountParticipation;

        // Note that was set.
        $this->setFields[]     = 'pf_amount_participation';
        $this->changedFields[] = 'pf_amount_participation';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_amount_participation']) === false) {
            $this->fieldsValuesHistory['pf_amount_participation'] = [];
        }
        $this->fieldsValuesHistory['pf_amount_participation'][] = $pfAmountParticipation;

        return $this;
    }

    /**
     * Getter for `pf_percent` field value.
     *
     * @return null|float
     */
    public function getPfPercent(): ?float
    {

        return $this->getCorePfPercent(...func_get_args());
    }

    /**
     * Core getter for `pf_percent` field value.
     *
     * @return null|float
     */
    public function getCorePfPercent(): ?float
    {

        return $this->pfPercent;
    }


    /**
     * Setter for `pf_percent` field value.
     *
     * @param null|float $pfPercent Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setPfPercent(?float $pfPercent): WfrznzM3FUVItem
    {

        return $this->setCorePfPercent($pfPercent);
    }

    /**
     * Core setter for `pf_percent` field value.
     *
     * @param null|float $pfPercent Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCorePfPercent(?float $pfPercent): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('pf_percent')->isValueValid($pfPercent);

        // If there is nothing to be changed.
        if (
            $this->pfPercent === $pfPercent
            || (string) $this->pfPercent === (string) $pfPercent
        ) {
            return $this;
        }

        // Save.
        $this->pfPercent = $pfPercent;

        // Note that was set.
        $this->setFields[]     = 'pf_percent';
        $this->changedFields[] = 'pf_percent';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_percent']) === false) {
            $this->fieldsValuesHistory['pf_percent'] = [];
        }
        $this->fieldsValuesHistory['pf_percent'][] = $pfPercent;

        return $this;
    }

    /**
     * Getter for `mf_amount_participation` field value.
     *
     * @return null|float
     */
    public function getMfAmountParticipation(): ?float
    {

        return $this->getCoreMfAmountParticipation(...func_get_args());
    }

    /**
     * Core getter for `mf_amount_participation` field value.
     *
     * @return null|float
     */
    public function getCoreMfAmountParticipation(): ?float
    {

        return $this->mfAmountParticipation;
    }


    /**
     * Setter for `mf_amount_participation` field value.
     *
     * @param null|float $mfAmountParticipation Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setMfAmountParticipation(?float $mfAmountParticipation): WfrznzM3FUVItem
    {

        return $this->setCoreMfAmountParticipation($mfAmountParticipation);
    }

    /**
     * Core setter for `mf_amount_participation` field value.
     *
     * @param null|float $mfAmountParticipation Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreMfAmountParticipation(?float $mfAmountParticipation): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('mf_amount_participation')->isValueValid($mfAmountParticipation);

        // If there is nothing to be changed.
        if (
            $this->mfAmountParticipation === $mfAmountParticipation
            || (string) $this->mfAmountParticipation === (string) $mfAmountParticipation
        ) {
            return $this;
        }

        // Save.
        $this->mfAmountParticipation = $mfAmountParticipation;

        // Note that was set.
        $this->setFields[]     = 'mf_amount_participation';
        $this->changedFields[] = 'mf_amount_participation';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mf_amount_participation']) === false) {
            $this->fieldsValuesHistory['mf_amount_participation'] = [];
        }
        $this->fieldsValuesHistory['mf_amount_participation'][] = $mfAmountParticipation;

        return $this;
    }

    /**
     * Getter for `mf_percent` field value.
     *
     * @return null|float
     */
    public function getMfPercent(): ?float
    {

        return $this->getCoreMfPercent(...func_get_args());
    }

    /**
     * Core getter for `mf_percent` field value.
     *
     * @return null|float
     */
    public function getCoreMfPercent(): ?float
    {

        return $this->mfPercent;
    }


    /**
     * Setter for `mf_percent` field value.
     *
     * @param null|float $mfPercent Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setMfPercent(?float $mfPercent): WfrznzM3FUVItem
    {

        return $this->setCoreMfPercent($mfPercent);
    }

    /**
     * Core setter for `mf_percent` field value.
     *
     * @param null|float $mfPercent Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreMfPercent(?float $mfPercent): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('mf_percent')->isValueValid($mfPercent);

        // If there is nothing to be changed.
        if (
            $this->mfPercent === $mfPercent
            || (string) $this->mfPercent === (string) $mfPercent
        ) {
            return $this;
        }

        // Save.
        $this->mfPercent = $mfPercent;

        // Note that was set.
        $this->setFields[]     = 'mf_percent';
        $this->changedFields[] = 'mf_percent';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['mf_percent']) === false) {
            $this->fieldsValuesHistory['mf_percent'] = [];
        }
        $this->fieldsValuesHistory['mf_percent'][] = $mfPercent;

        return $this;
    }

    /**
     * Getter for `condition` field value.
     *
     * @return null|string
     */
    public function getCondition(): ?string
    {

        return $this->getCoreCondition(...func_get_args());
    }

    /**
     * Core getter for `condition` field value.
     *
     * @return null|string
     */
    public function getCoreCondition(): ?string
    {

        return $this->condition;
    }


    /**
     * Setter for `condition` field value.
     *
     * @param null|string $condition Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCondition(?string $condition): WfrznzM3FUVItem
    {

        return $this->setCoreCondition($condition);
    }

    /**
     * Core setter for `condition` field value.
     *
     * @param null|string $condition Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreCondition(?string $condition): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('condition')->isValueValid($condition);

        // If there is nothing to be changed.
        if ($this->condition === $condition) {
            return $this;
        }

        // Save.
        $this->condition = $condition;

        // Note that was set.
        $this->setFields[]     = 'condition';
        $this->changedFields[] = 'condition';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['condition']) === false) {
            $this->fieldsValuesHistory['condition'] = [];
        }
        $this->fieldsValuesHistory['condition'][] = $condition;

        return $this;
    }

    /**
     * Getter for `security_type` field value.
     *
     * @return null|string
     */
    public function getSecurityType(): ?string
    {

        return $this->getCoreSecurityType(...func_get_args());
    }

    /**
     * Core getter for `security_type` field value.
     *
     * @return null|string
     */
    public function getCoreSecurityType(): ?string
    {

        return $this->securityType;
    }


    /**
     * Setter for `security_type` field value.
     *
     * @param null|string $securityType Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setSecurityType(?string $securityType): WfrznzM3FUVItem
    {

        return $this->setCoreSecurityType($securityType);
    }

    /**
     * Core setter for `security_type` field value.
     *
     * @param null|string $securityType Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreSecurityType(?string $securityType): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('security_type')->isValueValid($securityType);

        // If there is nothing to be changed.
        if ($this->securityType === $securityType) {
            return $this;
        }

        // Save.
        $this->securityType = $securityType;

        // Note that was set.
        $this->setFields[]     = 'security_type';
        $this->changedFields[] = 'security_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['security_type']) === false) {
            $this->fieldsValuesHistory['security_type'] = [];
        }
        $this->fieldsValuesHistory['security_type'][] = $securityType;

        return $this;
    }

    /**
     * Getter for `security_comment` field value.
     *
     * @return null|string
     */
    public function getSecurityComment(): ?string
    {

        return $this->getCoreSecurityComment(...func_get_args());
    }

    /**
     * Core getter for `security_comment` field value.
     *
     * @return null|string
     */
    public function getCoreSecurityComment(): ?string
    {

        return $this->securityComment;
    }


    /**
     * Setter for `security_comment` field value.
     *
     * @param null|string $securityComment Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setSecurityComment(?string $securityComment): WfrznzM3FUVItem
    {

        return $this->setCoreSecurityComment($securityComment);
    }

    /**
     * Core setter for `security_comment` field value.
     *
     * @param null|string $securityComment Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreSecurityComment(?string $securityComment): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('security_comment')->isValueValid($securityComment);

        // If there is nothing to be changed.
        if ($this->securityComment === $securityComment) {
            return $this;
        }

        // Save.
        $this->securityComment = $securityComment;

        // Note that was set.
        $this->setFields[]     = 'security_comment';
        $this->changedFields[] = 'security_comment';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['security_comment']) === false) {
            $this->fieldsValuesHistory['security_comment'] = [];
        }
        $this->fieldsValuesHistory['security_comment'][] = $securityComment;

        return $this;
    }

    /**
     * Getter for `credit_number` field value.
     *
     * @return null|string
     */
    public function getCreditNumber(): ?string
    {

        return $this->getCoreCreditNumber(...func_get_args());
    }

    /**
     * Core getter for `credit_number` field value.
     *
     * @return null|string
     */
    public function getCoreCreditNumber(): ?string
    {

        return $this->creditNumber;
    }


    /**
     * Setter for `credit_number` field value.
     *
     * @param null|string $creditNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCreditNumber(?string $creditNumber): WfrznzM3FUVItem
    {

        return $this->setCoreCreditNumber($creditNumber);
    }

    /**
     * Core setter for `credit_number` field value.
     *
     * @param null|string $creditNumber Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreCreditNumber(?string $creditNumber): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('credit_number')->isValueValid($creditNumber);

        // If there is nothing to be changed.
        if ($this->creditNumber === $creditNumber) {
            return $this;
        }

        // Save.
        $this->creditNumber = $creditNumber;

        // Note that was set.
        $this->setFields[]     = 'credit_number';
        $this->changedFields[] = 'credit_number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['credit_number']) === false) {
            $this->fieldsValuesHistory['credit_number'] = [];
        }
        $this->fieldsValuesHistory['credit_number'][] = $creditNumber;

        return $this;
    }

    /**
     * Getter for `credit_amount` field value.
     *
     * @return null|float
     */
    public function getCreditAmount(): ?float
    {

        return $this->getCoreCreditAmount(...func_get_args());
    }

    /**
     * Core getter for `credit_amount` field value.
     *
     * @return null|float
     */
    public function getCoreCreditAmount(): ?float
    {

        return $this->creditAmount;
    }


    /**
     * Setter for `credit_amount` field value.
     *
     * @param null|float $creditAmount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCreditAmount(?float $creditAmount): WfrznzM3FUVItem
    {

        return $this->setCoreCreditAmount($creditAmount);
    }

    /**
     * Core setter for `credit_amount` field value.
     *
     * @param null|float $creditAmount Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreCreditAmount(?float $creditAmount): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('credit_amount')->isValueValid($creditAmount);

        // If there is nothing to be changed.
        if (
            $this->creditAmount === $creditAmount
            || (string) $this->creditAmount === (string) $creditAmount
        ) {
            return $this;
        }

        // Save.
        $this->creditAmount = $creditAmount;

        // Note that was set.
        $this->setFields[]     = 'credit_amount';
        $this->changedFields[] = 'credit_amount';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['credit_amount']) === false) {
            $this->fieldsValuesHistory['credit_amount'] = [];
        }
        $this->fieldsValuesHistory['credit_amount'][] = $creditAmount;

        return $this;
    }

    /**
     * Getter for `credit_date` field value.
     *
     * @return null|string
     */
    public function getCreditDate(): ?string
    {

        return $this->getCoreCreditDate(...func_get_args());
    }

    /**
     * Core getter for `credit_date` field value.
     *
     * @return null|string
     */
    public function getCoreCreditDate(): ?string
    {

        if (empty($this->creditDate) === true) {
            $this->creditDate = null;
        }

        if ($this->creditDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('credit_date')
                ->formatToExcel($this->creditDate);
        }

        return $this->creditDate;
    }


    /**
     * Setter for `credit_date` field value.
     *
     * @param null|string $creditDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCreditDate(?string $creditDate): WfrznzM3FUVItem
    {

        return $this->setCoreCreditDate($creditDate);
    }

    /**
     * Core setter for `credit_date` field value.
     *
     * @param null|string $creditDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreCreditDate(?string $creditDate): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('credit_date')->isValueValid($creditDate);

        // If there is nothing to be changed.
        if ($this->creditDate === $creditDate) {
            return $this;
        }

        // Save.
        $this->creditDate = $creditDate;

        // Note that was set.
        $this->setFields[]     = 'credit_date';
        $this->changedFields[] = 'credit_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['credit_date']) === false) {
            $this->fieldsValuesHistory['credit_date'] = [];
        }
        $this->fieldsValuesHistory['credit_date'][] = $creditDate;

        return $this;
    }

    /**
     * Getter for `credit_validity_date` field value.
     *
     * @return null|string
     */
    public function getCreditValidityDate(): ?string
    {

        return $this->getCoreCreditValidityDate(...func_get_args());
    }

    /**
     * Core getter for `credit_validity_date` field value.
     *
     * @return null|string
     */
    public function getCoreCreditValidityDate(): ?string
    {

        if (empty($this->creditValidityDate) === true) {
            $this->creditValidityDate = null;
        }

        if ($this->creditValidityDate !== null && func_num_args() > 0 && func_get_arg(0) === 'excel') {
            return (string) $this->grabField('credit_validity_date')
                ->formatToExcel($this->creditValidityDate);
        }

        return $this->creditValidityDate;
    }


    /**
     * Setter for `credit_validity_date` field value.
     *
     * @param null|string $creditValidityDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCreditValidityDate(?string $creditValidityDate): WfrznzM3FUVItem
    {

        return $this->setCoreCreditValidityDate($creditValidityDate);
    }

    /**
     * Core setter for `credit_validity_date` field value.
     *
     * @param null|string $creditValidityDate Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreCreditValidityDate(?string $creditValidityDate): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('credit_validity_date')->isValueValid($creditValidityDate);

        // If there is nothing to be changed.
        if ($this->creditValidityDate === $creditValidityDate) {
            return $this;
        }

        // Save.
        $this->creditValidityDate = $creditValidityDate;

        // Note that was set.
        $this->setFields[]     = 'credit_validity_date';
        $this->changedFields[] = 'credit_validity_date';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['credit_validity_date']) === false) {
            $this->fieldsValuesHistory['credit_validity_date'] = [];
        }
        $this->fieldsValuesHistory['credit_validity_date'][] = $creditValidityDate;

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
     * @return WfrznzM3FUVItem
     */
    public function setComment(?string $comment): WfrznzM3FUVItem
    {

        return $this->setCoreComment($comment);
    }

    /**
     * Core setter for `comment` field value.
     *
     * @param null|string $comment Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreComment(?string $comment): WfrznzM3FUVItem
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
     * Getter for `bank_id` field value.
     *
     * @return null|integer
     */
    public function getBankId(): ?int
    {

        return $this->getCoreBankId(...func_get_args());
    }

    /**
     * Core getter for `bank_id` field value.
     *
     * @return null|integer
     */
    public function getCoreBankId(): ?int
    {

        return $this->bankId;
    }


    /**
     * Setter for `bank_id` field value.
     *
     * @param null|integer $bankId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBankId(?int $bankId): WfrznzM3FUVItem
    {

        return $this->setCoreBankId($bankId);
    }

    /**
     * Core setter for `bank_id` field value.
     *
     * @param null|integer $bankId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBankId(?int $bankId): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('bank_id')->isValueValid($bankId);

        // If there is nothing to be changed.
        if ($this->bankId === $bankId) {
            return $this;
        }

        // Save.
        $this->bankId = $bankId;

        // Note that was set.
        $this->setFields[]     = 'bank_id';
        $this->changedFields[] = 'bank_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['bank_id']) === false) {
            $this->fieldsValuesHistory['bank_id'] = [];
        }
        $this->fieldsValuesHistory['bank_id'][] = $bankId;

        return $this;
    }

    /**
     * Getter for `beneficiary_id` field value.
     *
     * @return null|integer
     */
    public function getBeneficiaryId(): ?int
    {

        return $this->getCoreBeneficiaryId(...func_get_args());
    }

    /**
     * Core getter for `beneficiary_id` field value.
     *
     * @return null|integer
     */
    public function getCoreBeneficiaryId(): ?int
    {

        return $this->beneficiaryId;
    }


    /**
     * Setter for `beneficiary_id` field value.
     *
     * @param null|integer $beneficiaryId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBeneficiaryId(?int $beneficiaryId): WfrznzM3FUVItem
    {

        return $this->setCoreBeneficiaryId($beneficiaryId);
    }

    /**
     * Core setter for `beneficiary_id` field value.
     *
     * @param null|integer $beneficiaryId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBeneficiaryId(?int $beneficiaryId): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('beneficiary_id')->isValueValid($beneficiaryId);

        // If there is nothing to be changed.
        if ($this->beneficiaryId === $beneficiaryId) {
            return $this;
        }

        // Save.
        $this->beneficiaryId = $beneficiaryId;

        // Note that was set.
        $this->setFields[]     = 'beneficiary_id';
        $this->changedFields[] = 'beneficiary_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['beneficiary_id']) === false) {
            $this->fieldsValuesHistory['beneficiary_id'] = [];
        }
        $this->fieldsValuesHistory['beneficiary_id'][] = $beneficiaryId;

        return $this;
    }

    /**
     * Getter for `operating_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getOperatingAgreementId(): ?int
    {

        return $this->getCoreOperatingAgreementId(...func_get_args());
    }

    /**
     * Core getter for `operating_agreement_id` field value.
     *
     * @return null|integer
     */
    public function getCoreOperatingAgreementId(): ?int
    {

        return $this->operatingAgreementId;
    }


    /**
     * Setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setOperatingAgreementId(?int $operatingAgreementId): WfrznzM3FUVItem
    {

        return $this->setCoreOperatingAgreementId($operatingAgreementId);
    }

    /**
     * Core setter for `operating_agreement_id` field value.
     *
     * @param null|integer $operatingAgreementId Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreOperatingAgreementId(?int $operatingAgreementId): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('operating_agreement_id')->isValueValid($operatingAgreementId);

        // If there is nothing to be changed.
        if ($this->operatingAgreementId === $operatingAgreementId) {
            return $this;
        }

        // Save.
        $this->operatingAgreementId = $operatingAgreementId;

        // Note that was set.
        $this->setFields[]     = 'operating_agreement_id';
        $this->changedFields[] = 'operating_agreement_id';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['operating_agreement_id']) === false) {
            $this->fieldsValuesHistory['operating_agreement_id'] = [];
        }
        $this->fieldsValuesHistory['operating_agreement_id'][] = $operatingAgreementId;

        return $this;
    }

    /**
     * Getter for `base_constant_interest` field value.
     *
     * @return null|float
     */
    public function getBaseConstantInterest(): ?float
    {

        return $this->getCoreBaseConstantInterest(...func_get_args());
    }

    /**
     * Core getter for `base_constant_interest` field value.
     *
     * @return null|float
     */
    public function getCoreBaseConstantInterest(): ?float
    {

        return $this->baseConstantInterest;
    }


    /**
     * Setter for `base_constant_interest` field value.
     *
     * @param null|float $baseConstantInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setBaseConstantInterest(?float $baseConstantInterest): WfrznzM3FUVItem
    {

        return $this->setCoreBaseConstantInterest($baseConstantInterest);
    }

    /**
     * Core setter for `base_constant_interest` field value.
     *
     * @param null|float $baseConstantInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreBaseConstantInterest(?float $baseConstantInterest): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('base_constant_interest')->isValueValid($baseConstantInterest);

        // If there is nothing to be changed.
        if (
            $this->baseConstantInterest === $baseConstantInterest
            || (string) $this->baseConstantInterest === (string) $baseConstantInterest
        ) {
            return $this;
        }

        // Save.
        $this->baseConstantInterest = $baseConstantInterest;

        // Note that was set.
        $this->setFields[]     = 'base_constant_interest';
        $this->changedFields[] = 'base_constant_interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['base_constant_interest']) === false) {
            $this->fieldsValuesHistory['base_constant_interest'] = [];
        }
        $this->fieldsValuesHistory['base_constant_interest'][] = $baseConstantInterest;

        return $this;
    }

    /**
     * Getter for `interest` field value.
     *
     * @return null|string
     */
    public function getInterest(): ?string
    {

        return $this->getCoreInterest(...func_get_args());
    }

    /**
     * Core getter for `interest` field value.
     *
     * @return null|string
     */
    public function getCoreInterest(): ?string
    {

        return $this->interest;
    }


    /**
     * Setter for `interest` field value.
     *
     * @param null|string $interest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setInterest(?string $interest): WfrznzM3FUVItem
    {

        return $this->setCoreInterest($interest);
    }

    /**
     * Core setter for `interest` field value.
     *
     * @param null|string $interest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreInterest(?string $interest): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('interest')->isValueValid($interest);

        // If there is nothing to be changed.
        if ($this->interest === $interest) {
            return $this;
        }

        // Save.
        $this->interest = $interest;

        // Note that was set.
        $this->setFields[]     = 'interest';
        $this->changedFields[] = 'interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['interest']) === false) {
            $this->fieldsValuesHistory['interest'] = [];
        }
        $this->fieldsValuesHistory['interest'][] = $interest;

        return $this;
    }

    /**
     * Getter for `profit_interest` field value.
     *
     * @return null|float
     */
    public function getProfitInterest(): ?float
    {

        return $this->getCoreProfitInterest(...func_get_args());
    }

    /**
     * Core getter for `profit_interest` field value.
     *
     * @return null|float
     */
    public function getCoreProfitInterest(): ?float
    {

        return $this->profitInterest;
    }


    /**
     * Setter for `profit_interest` field value.
     *
     * @param null|float $profitInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setProfitInterest(?float $profitInterest): WfrznzM3FUVItem
    {

        return $this->setCoreProfitInterest($profitInterest);
    }

    /**
     * Core setter for `profit_interest` field value.
     *
     * @param null|float $profitInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreProfitInterest(?float $profitInterest): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('profit_interest')->isValueValid($profitInterest);

        // If there is nothing to be changed.
        if (
            $this->profitInterest === $profitInterest
            || (string) $this->profitInterest === (string) $profitInterest
        ) {
            return $this;
        }

        // Save.
        $this->profitInterest = $profitInterest;

        // Note that was set.
        $this->setFields[]     = 'profit_interest';
        $this->changedFields[] = 'profit_interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['profit_interest']) === false) {
            $this->fieldsValuesHistory['profit_interest'] = [];
        }
        $this->fieldsValuesHistory['profit_interest'][] = $profitInterest;

        return $this;
    }

    /**
     * Getter for `total_interest` field value.
     *
     * @return null|float
     */
    public function getTotalInterest(): ?float
    {

        return $this->getCoreTotalInterest(...func_get_args());
    }

    /**
     * Core getter for `total_interest` field value.
     *
     * @return null|float
     */
    public function getCoreTotalInterest(): ?float
    {

        return $this->totalInterest;
    }


    /**
     * Setter for `total_interest` field value.
     *
     * @param null|float $totalInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setTotalInterest(?float $totalInterest): WfrznzM3FUVItem
    {

        return $this->setCoreTotalInterest($totalInterest);
    }

    /**
     * Core setter for `total_interest` field value.
     *
     * @param null|float $totalInterest Value to be set.
     *
     * @return WfrznzM3FUVItem
     */
    public function setCoreTotalInterest(?float $totalInterest): WfrznzM3FUVItem
    {

        // Test value.
        $this->grabField('total_interest')->isValueValid($totalInterest);

        // If there is nothing to be changed.
        if (
            $this->totalInterest === $totalInterest
            || (string) $this->totalInterest === (string) $totalInterest
        ) {
            return $this;
        }

        // Save.
        $this->totalInterest = $totalInterest;

        // Note that was set.
        $this->setFields[]     = 'total_interest';
        $this->changedFields[] = 'total_interest';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['total_interest']) === false) {
            $this->fieldsValuesHistory['total_interest'] = [];
        }
        $this->fieldsValuesHistory['total_interest'][] = $totalInterest;

        return $this;
    }
}
