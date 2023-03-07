<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateResellerUserQuotaRequest extends Model
{
    /**
     * @description The amount. Unit: CNY. This parameter is required if you create a quota account.
     *
     * @example 100
     *
     * @var string
     */
    public $amount;

    /**
     * @description The name of the currency.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The ID of business in an external system.
     *
     * @example 7ed0bedc-056e-4a71-9249-4581615c028f
     *
     * @var string
     */
    public $outBizId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'amount'   => 'Amount',
        'currency' => 'Currency',
        'outBizId' => 'OutBizId',
        'ownerId'  => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResellerUserQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
