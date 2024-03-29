<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponseBody\data\productList;

use AlibabaCloud\Tea\Model;

class product extends Model
{
    /**
     * @description The code of the service.
     *
     * @example cdn
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The name of the service.
     *
     * @example CDN (Pay-as-you-go)
     *
     * @var string
     */
    public $productName;

    /**
     * @description The type of the service.
     *
     * @example CDN
     *
     * @var string
     */
    public $productType;

    /**
     * @description The billing method. Valid values:
     *
     *   Subscription: subscription
     *   PayAsYouGo: pay-as-you-go
     *
     * @example PayAsYouGo
     *
     * @var string
     */
    public $subscriptionType;
    protected $_name = [
        'productCode'      => 'ProductCode',
        'productName'      => 'ProductName',
        'productType'      => 'ProductType',
        'subscriptionType' => 'SubscriptionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return product
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }

        return $model;
    }
}
