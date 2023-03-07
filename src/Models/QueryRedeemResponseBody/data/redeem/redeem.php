<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data\redeem;

use AlibabaCloud\Tea\Model;

class redeem extends Model
{
    /**
     * @description The services to which the redemption coupon is applicable.
     *
     * @example Elastic Compute Service (ECS)
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description The balance of the redemption coupon.
     *
     * @example 0
     *
     * @var string
     */
    public $balance;

    /**
     * @description The time when the redemption coupon took effect.
     *
     * @example 2018-05-14 20:25:00
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the redemption coupon expired.
     *
     * @example 2018-06-13 20:25:00
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @description The time when the redemption coupon was issued.
     *
     * @example 2018-05-14 20:25:00
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @description The nominal value of the redemption coupon.
     *
     * @example 0
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @description The ID of the redemption coupon.
     *
     * @example 1342
     *
     * @var string
     */
    public $redeemId;

    /**
     * @description The number of the redemption coupon.
     *
     * @example 4889*****1610
     *
     * @var string
     */
    public $redeemNo;

    /**
     * @description The specifications of the redemption coupon.
     *
     * @example N/A
     *
     * @var string
     */
    public $specification;

    /**
     * @description The status of the redemption coupon. Valid values:
     *
     *   Generated
     *   CallBack
     *   RefundPending
     *   Canceled
     *   Order_Canceled
     *   ActivePending
     *   ActiveSuccess
     *   ExchangePending
     *   ExchangeSuccess
     *   Expired
     *
     * @example Generated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'balance'            => 'Balance',
        'effectiveTime'      => 'EffectiveTime',
        'expiryTime'         => 'ExpiryTime',
        'grantedTime'        => 'GrantedTime',
        'nominalValue'       => 'NominalValue',
        'redeemId'           => 'RedeemId',
        'redeemNo'           => 'RedeemNo',
        'specification'      => 'Specification',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->grantedTime) {
            $res['GrantedTime'] = $this->grantedTime;
        }
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }
        if (null !== $this->redeemId) {
            $res['RedeemId'] = $this->redeemId;
        }
        if (null !== $this->redeemNo) {
            $res['RedeemNo'] = $this->redeemNo;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redeem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['GrantedTime'])) {
            $model->grantedTime = $map['GrantedTime'];
        }
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }
        if (isset($map['RedeemId'])) {
            $model->redeemId = $map['RedeemId'];
        }
        if (isset($map['RedeemNo'])) {
            $model->redeemNo = $map['RedeemNo'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
