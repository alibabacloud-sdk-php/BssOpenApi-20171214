<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data\promotionDetails;

use AlibabaCloud\Tea\Model;

class promotionDetail extends Model
{
    /**
     * @description The description of the discount.
     *
     * @example This discount allows you to use a service at the minimum price and is provided for testing purposes only.
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @description The ID of the discount.
     *
     * @example 10200210
     *
     * @var int
     */
    public $promotionId;

    /**
     * @description The name of the discount.
     *
     * @example This discount allows you to use a service at the minimum price and is provided for testing purposes only.
     *
     * @var string
     */
    public $promotionName;
    protected $_name = [
        'promotionDesc' => 'PromotionDesc',
        'promotionId'   => 'PromotionId',
        'promotionName' => 'PromotionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionDesc) {
            $res['PromotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionId) {
            $res['PromotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['PromotionName'] = $this->promotionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PromotionDesc'])) {
            $model->promotionDesc = $map['PromotionDesc'];
        }
        if (isset($map['PromotionId'])) {
            $model->promotionId = $map['PromotionId'];
        }
        if (isset($map['PromotionName'])) {
            $model->promotionName = $map['PromotionName'];
        }

        return $model;
    }
}
