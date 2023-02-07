<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryDPUtilizationDetailRequest extends Model
{
    /**
     * @example ecsRi
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @example oss-123123
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $includeShare;

    /**
     * @example oss-123123
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example Instancetyp
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @example CAESF***zNTAw
     *
     * @var string
     */
    public $lastToken;

    /**
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @example oss
     *
     * @var string
     */
    public $prodCode;

    /**
     * @example 2019-05-23 12:00:00
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'commodityCode'      => 'CommodityCode',
        'deductedInstanceId' => 'DeductedInstanceId',
        'endTime'            => 'EndTime',
        'includeShare'       => 'IncludeShare',
        'instanceId'         => 'InstanceId',
        'instanceSpec'       => 'InstanceSpec',
        'lastToken'          => 'LastToken',
        'limit'              => 'Limit',
        'prodCode'           => 'ProdCode',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->includeShare) {
            $res['IncludeShare'] = $this->includeShare;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->lastToken) {
            $res['LastToken'] = $this->lastToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDPUtilizationDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['IncludeShare'])) {
            $model->includeShare = $map['IncludeShare'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['LastToken'])) {
            $model->lastToken = $map['LastToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
