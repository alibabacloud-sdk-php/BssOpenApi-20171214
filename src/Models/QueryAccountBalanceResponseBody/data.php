<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBalanceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $availableAmount;

    /**
     * @var string
     */
    public $availableCashAmount;

    /**
     * @var string
     */
    public $creditAmount;

    /**
     * @var string
     */
    public $mybankCreditAmount;

    /**
     * @var string
     */
    public $currency;
    protected $_name = [
        'availableAmount'     => 'AvailableAmount',
        'availableCashAmount' => 'AvailableCashAmount',
        'creditAmount'        => 'CreditAmount',
        'mybankCreditAmount'  => 'MybankCreditAmount',
        'currency'            => 'Currency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAmount) {
            $res['AvailableAmount'] = $this->availableAmount;
        }
        if (null !== $this->availableCashAmount) {
            $res['AvailableCashAmount'] = $this->availableCashAmount;
        }
        if (null !== $this->creditAmount) {
            $res['CreditAmount'] = $this->creditAmount;
        }
        if (null !== $this->mybankCreditAmount) {
            $res['MybankCreditAmount'] = $this->mybankCreditAmount;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAmount'])) {
            $model->availableAmount = $map['AvailableAmount'];
        }
        if (isset($map['AvailableCashAmount'])) {
            $model->availableCashAmount = $map['AvailableCashAmount'];
        }
        if (isset($map['CreditAmount'])) {
            $model->creditAmount = $map['CreditAmount'];
        }
        if (isset($map['MybankCreditAmount'])) {
            $model->mybankCreditAmount = $map['MybankCreditAmount'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }

        return $model;
    }
}
