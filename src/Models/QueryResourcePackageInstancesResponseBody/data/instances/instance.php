<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances\instance\applicableProducts;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $expiryTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $remainingAmountUnit;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $totalAmount;

    /**
     * @var string
     */
    public $deductType;

    /**
     * @var string
     */
    public $totalAmountUnit;

    /**
     * @var string
     */
    public $remainingAmount;

    /**
     * @var applicableProducts
     */
    public $applicableProducts;
    protected $_name = [
        'expiryTime'          => 'ExpiryTime',
        'status'              => 'Status',
        'remark'              => 'Remark',
        'remainingAmountUnit' => 'RemainingAmountUnit',
        'instanceId'          => 'InstanceId',
        'packageType'         => 'PackageType',
        'effectiveTime'       => 'EffectiveTime',
        'region'              => 'Region',
        'totalAmount'         => 'TotalAmount',
        'deductType'          => 'DeductType',
        'totalAmountUnit'     => 'TotalAmountUnit',
        'remainingAmount'     => 'RemainingAmount',
        'applicableProducts'  => 'ApplicableProducts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->remainingAmountUnit) {
            $res['RemainingAmountUnit'] = $this->remainingAmountUnit;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->totalAmount) {
            $res['TotalAmount'] = $this->totalAmount;
        }
        if (null !== $this->deductType) {
            $res['DeductType'] = $this->deductType;
        }
        if (null !== $this->totalAmountUnit) {
            $res['TotalAmountUnit'] = $this->totalAmountUnit;
        }
        if (null !== $this->remainingAmount) {
            $res['RemainingAmount'] = $this->remainingAmount;
        }
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = null !== $this->applicableProducts ? $this->applicableProducts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['RemainingAmountUnit'])) {
            $model->remainingAmountUnit = $map['RemainingAmountUnit'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['TotalAmount'])) {
            $model->totalAmount = $map['TotalAmount'];
        }
        if (isset($map['DeductType'])) {
            $model->deductType = $map['DeductType'];
        }
        if (isset($map['TotalAmountUnit'])) {
            $model->totalAmountUnit = $map['TotalAmountUnit'];
        }
        if (isset($map['RemainingAmount'])) {
            $model->remainingAmount = $map['RemainingAmount'];
        }
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = applicableProducts::fromMap($map['ApplicableProducts']);
        }

        return $model;
    }
}
