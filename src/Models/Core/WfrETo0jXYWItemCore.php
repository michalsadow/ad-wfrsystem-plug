<?php

declare(strict_types=1);

namespace Przeslijmi\AgileDataWfrSystemPlug\Models\Core;

use Przeslijmi\AgileDataWfrSystemPlug\Models\Core\WfrETo0jXYWItemModel;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrETo0jXYWCollection;
use Przeslijmi\AgileDataWfrSystemPlug\Models\WfrETo0jXYWItem;
use Przeslijmi\Shortquery\Data\Instance;
use Przeslijmi\Shortquery\Exceptions\Data\CollectionSliceNotPossibleException;
use Przeslijmi\Shortquery\Tools\InstancesFactory;
use stdClass;

/**
 * ShortQuery Instance Core class for WfrETo0jXYWItem Model.
 *
 * This is a `<shortquery-role:instance-core>`.
 */
class WfrETo0jXYWItemCore extends Instance
{

    /**
     * Field `id`.
     *
     * @var integer
     */
    private $id;

    /**
     * Field `number`.
     *
     * @var null|string
     */
    private $number;

    /**
     * Field `product_type`.
     *
     * @var null|string
     */
    private $productType;

    /**
     * Field `pf_name`.
     *
     * @var null|string
     */
    private $pfName;

    /**
     * Field `pf_short_name`.
     *
     * @var null|string
     */
    private $pfShortName;

    /**
     * Field `loan_number`.
     *
     * @var null|string
     */
    private $loanNumber;

    /**
     * Field `beneficiary_name`.
     *
     * @var null|string
     */
    private $beneficiaryName;

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
     * Constructor.
     *
     * @param string $database Optional, `null`. In which database this field is defined.
     */
    public function __construct(?string $database = null)
    {

        // Get model Instance.
        $this->model = WfrETo0jXYWItemModel::getInstance();

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
        if (isset($inject['number']) === true && $inject['number'] !== null) {
            $this->number = (string) $inject['number'];
        }
        if (isset($inject['product_type']) === true && $inject['product_type'] !== null) {
            $this->productType = (string) $inject['product_type'];
        }
        if (isset($inject['pf_name']) === true && $inject['pf_name'] !== null) {
            $this->pfName = (string) $inject['pf_name'];
        }
        if (isset($inject['pf_short_name']) === true && $inject['pf_short_name'] !== null) {
            $this->pfShortName = (string) $inject['pf_short_name'];
        }
        if (isset($inject['loan_number']) === true && $inject['loan_number'] !== null) {
            $this->loanNumber = (string) $inject['loan_number'];
        }
        if (isset($inject['beneficiary_name']) === true && $inject['beneficiary_name'] !== null) {
            $this->beneficiaryName = (string) $inject['beneficiary_name'];
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
     * @return WfrETo0jXYWItem
     */
    public function setId(int $id): WfrETo0jXYWItem
    {

        return $this->setCoreId($id);
    }

    /**
     * Core setter for `id` field value.
     *
     * @param integer $id Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreId(int $id): WfrETo0jXYWItem
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
     * Getter for `number` field value.
     *
     * @return null|string
     */
    public function getNumber(): ?string
    {

        return $this->getCoreNumber(...func_get_args());
    }

    /**
     * Core getter for `number` field value.
     *
     * @return null|string
     */
    public function getCoreNumber(): ?string
    {

        return $this->number;
    }


    /**
     * Setter for `number` field value.
     *
     * @param null|string $number Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setNumber(?string $number): WfrETo0jXYWItem
    {

        return $this->setCoreNumber($number);
    }

    /**
     * Core setter for `number` field value.
     *
     * @param null|string $number Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreNumber(?string $number): WfrETo0jXYWItem
    {

        // Test value.
        $this->grabField('number')->isValueValid($number);

        // If there is nothing to be changed.
        if ($this->number === $number) {
            return $this;
        }

        // Save.
        $this->number = $number;

        // Note that was set.
        $this->setFields[]     = 'number';
        $this->changedFields[] = 'number';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['number']) === false) {
            $this->fieldsValuesHistory['number'] = [];
        }
        $this->fieldsValuesHistory['number'][] = $number;

        return $this;
    }

    /**
     * Getter for `product_type` field value.
     *
     * @return null|string
     */
    public function getProductType(): ?string
    {

        return $this->getCoreProductType(...func_get_args());
    }

    /**
     * Core getter for `product_type` field value.
     *
     * @return null|string
     */
    public function getCoreProductType(): ?string
    {

        return $this->productType;
    }


    /**
     * Setter for `product_type` field value.
     *
     * @param null|string $productType Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setProductType(?string $productType): WfrETo0jXYWItem
    {

        return $this->setCoreProductType($productType);
    }

    /**
     * Core setter for `product_type` field value.
     *
     * @param null|string $productType Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreProductType(?string $productType): WfrETo0jXYWItem
    {

        // Test value.
        $this->grabField('product_type')->isValueValid($productType);

        // If there is nothing to be changed.
        if ($this->productType === $productType) {
            return $this;
        }

        // Save.
        $this->productType = $productType;

        // Note that was set.
        $this->setFields[]     = 'product_type';
        $this->changedFields[] = 'product_type';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['product_type']) === false) {
            $this->fieldsValuesHistory['product_type'] = [];
        }
        $this->fieldsValuesHistory['product_type'][] = $productType;

        return $this;
    }

    /**
     * Getter for `pf_name` field value.
     *
     * @return null|string
     */
    public function getPfName(): ?string
    {

        return $this->getCorePfName(...func_get_args());
    }

    /**
     * Core getter for `pf_name` field value.
     *
     * @return null|string
     */
    public function getCorePfName(): ?string
    {

        return $this->pfName;
    }


    /**
     * Setter for `pf_name` field value.
     *
     * @param null|string $pfName Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setPfName(?string $pfName): WfrETo0jXYWItem
    {

        return $this->setCorePfName($pfName);
    }

    /**
     * Core setter for `pf_name` field value.
     *
     * @param null|string $pfName Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCorePfName(?string $pfName): WfrETo0jXYWItem
    {

        // Test value.
        $this->grabField('pf_name')->isValueValid($pfName);

        // If there is nothing to be changed.
        if ($this->pfName === $pfName) {
            return $this;
        }

        // Save.
        $this->pfName = $pfName;

        // Note that was set.
        $this->setFields[]     = 'pf_name';
        $this->changedFields[] = 'pf_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_name']) === false) {
            $this->fieldsValuesHistory['pf_name'] = [];
        }
        $this->fieldsValuesHistory['pf_name'][] = $pfName;

        return $this;
    }

    /**
     * Getter for `pf_short_name` field value.
     *
     * @return null|string
     */
    public function getPfShortName(): ?string
    {

        return $this->getCorePfShortName(...func_get_args());
    }

    /**
     * Core getter for `pf_short_name` field value.
     *
     * @return null|string
     */
    public function getCorePfShortName(): ?string
    {

        return $this->pfShortName;
    }


    /**
     * Setter for `pf_short_name` field value.
     *
     * @param null|string $pfShortName Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setPfShortName(?string $pfShortName): WfrETo0jXYWItem
    {

        return $this->setCorePfShortName($pfShortName);
    }

    /**
     * Core setter for `pf_short_name` field value.
     *
     * @param null|string $pfShortName Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCorePfShortName(?string $pfShortName): WfrETo0jXYWItem
    {

        // Test value.
        $this->grabField('pf_short_name')->isValueValid($pfShortName);

        // If there is nothing to be changed.
        if ($this->pfShortName === $pfShortName) {
            return $this;
        }

        // Save.
        $this->pfShortName = $pfShortName;

        // Note that was set.
        $this->setFields[]     = 'pf_short_name';
        $this->changedFields[] = 'pf_short_name';

        // Note that was changed.
        if (isset($this->fieldsValuesHistory['pf_short_name']) === false) {
            $this->fieldsValuesHistory['pf_short_name'] = [];
        }
        $this->fieldsValuesHistory['pf_short_name'][] = $pfShortName;

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
     * @return WfrETo0jXYWItem
     */
    public function setLoanNumber(?string $loanNumber): WfrETo0jXYWItem
    {

        return $this->setCoreLoanNumber($loanNumber);
    }

    /**
     * Core setter for `loan_number` field value.
     *
     * @param null|string $loanNumber Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreLoanNumber(?string $loanNumber): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setBeneficiaryName(?string $beneficiaryName): WfrETo0jXYWItem
    {

        return $this->setCoreBeneficiaryName($beneficiaryName);
    }

    /**
     * Core setter for `beneficiary_name` field value.
     *
     * @param null|string $beneficiaryName Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreBeneficiaryName(?string $beneficiaryName): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setBeneficiaryRegon(?string $beneficiaryRegon): WfrETo0jXYWItem
    {

        return $this->setCoreBeneficiaryRegon($beneficiaryRegon);
    }

    /**
     * Core setter for `beneficiary_regon` field value.
     *
     * @param null|string $beneficiaryRegon Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreBeneficiaryRegon(?string $beneficiaryRegon): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setBeneficiaryNip(?string $beneficiaryNip): WfrETo0jXYWItem
    {

        return $this->setCoreBeneficiaryNip($beneficiaryNip);
    }

    /**
     * Core setter for `beneficiary_nip` field value.
     *
     * @param null|string $beneficiaryNip Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreBeneficiaryNip(?string $beneficiaryNip): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setBeneficiaryPkd(?string $beneficiaryPkd): WfrETo0jXYWItem
    {

        return $this->setCoreBeneficiaryPkd($beneficiaryPkd);
    }

    /**
     * Core setter for `beneficiary_pkd` field value.
     *
     * @param null|string $beneficiaryPkd Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreBeneficiaryPkd(?string $beneficiaryPkd): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setBeneficiaryType(?string $beneficiaryType): WfrETo0jXYWItem
    {

        return $this->setCoreBeneficiaryType($beneficiaryType);
    }

    /**
     * Core setter for `beneficiary_type` field value.
     *
     * @param null|string $beneficiaryType Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreBeneficiaryType(?string $beneficiaryType): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setAmount(?float $amount): WfrETo0jXYWItem
    {

        return $this->setCoreAmount($amount);
    }

    /**
     * Core setter for `amount` field value.
     *
     * @param null|float $amount Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreAmount(?float $amount): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setPublicGrantedAmount(?float $publicGrantedAmount): WfrETo0jXYWItem
    {

        return $this->setCorePublicGrantedAmount($publicGrantedAmount);
    }

    /**
     * Core setter for `public_granted_amount` field value.
     *
     * @param null|float $publicGrantedAmount Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCorePublicGrantedAmount(?float $publicGrantedAmount): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setPfAmountParticipation(?float $pfAmountParticipation): WfrETo0jXYWItem
    {

        return $this->setCorePfAmountParticipation($pfAmountParticipation);
    }

    /**
     * Core setter for `pf_amount_participation` field value.
     *
     * @param null|float $pfAmountParticipation Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCorePfAmountParticipation(?float $pfAmountParticipation): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setPfPercent(?float $pfPercent): WfrETo0jXYWItem
    {

        return $this->setCorePfPercent($pfPercent);
    }

    /**
     * Core setter for `pf_percent` field value.
     *
     * @param null|float $pfPercent Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCorePfPercent(?float $pfPercent): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setMfAmountParticipation(?float $mfAmountParticipation): WfrETo0jXYWItem
    {

        return $this->setCoreMfAmountParticipation($mfAmountParticipation);
    }

    /**
     * Core setter for `mf_amount_participation` field value.
     *
     * @param null|float $mfAmountParticipation Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreMfAmountParticipation(?float $mfAmountParticipation): WfrETo0jXYWItem
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
     * @return WfrETo0jXYWItem
     */
    public function setMfPercent(?float $mfPercent): WfrETo0jXYWItem
    {

        return $this->setCoreMfPercent($mfPercent);
    }

    /**
     * Core setter for `mf_percent` field value.
     *
     * @param null|float $mfPercent Value to be set.
     *
     * @return WfrETo0jXYWItem
     */
    public function setCoreMfPercent(?float $mfPercent): WfrETo0jXYWItem
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
}
