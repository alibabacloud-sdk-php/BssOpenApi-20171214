<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySavingsPlansInstanceResponseBody\data\items;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The type of the savings plan. Valid values:
     *
     *   universal: general-purpose
     *   ecs: ECS compute
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The key of the tag to query.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The language of the return data. Valid values:
     *
     *   ZH: Chinese
     *   EN: English
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'items'      => 'Items',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
