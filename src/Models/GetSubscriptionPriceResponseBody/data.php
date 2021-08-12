<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetSubscriptionPriceResponseBody\data\promotionDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $originalPrice;

    /**
     * @var float
     */
    public $discountPrice;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var float
     */
    public $tradePrice;

    /**
     * @var moduleDetails
     */
    public $moduleDetails;

    /**
     * @var promotionDetails
     */
    public $promotionDetails;
    protected $_name = [
        'originalPrice'    => 'OriginalPrice',
        'discountPrice'    => 'DiscountPrice',
        'currency'         => 'Currency',
        'quantity'         => 'Quantity',
        'tradePrice'       => 'TradePrice',
        'moduleDetails'    => 'ModuleDetails',
        'promotionDetails' => 'PromotionDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->discountPrice) {
            $res['DiscountPrice'] = $this->discountPrice;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->tradePrice) {
            $res['TradePrice'] = $this->tradePrice;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = null !== $this->moduleDetails ? $this->moduleDetails->toMap() : null;
        }
        if (null !== $this->promotionDetails) {
            $res['PromotionDetails'] = null !== $this->promotionDetails ? $this->promotionDetails->toMap() : null;
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
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['DiscountPrice'])) {
            $model->discountPrice = $map['DiscountPrice'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['TradePrice'])) {
            $model->tradePrice = $map['TradePrice'];
        }
        if (isset($map['ModuleDetails'])) {
            $model->moduleDetails = moduleDetails::fromMap($map['ModuleDetails']);
        }
        if (isset($map['PromotionDetails'])) {
            $model->promotionDetails = promotionDetails::fromMap($map['PromotionDetails']);
        }

        return $model;
    }
}
