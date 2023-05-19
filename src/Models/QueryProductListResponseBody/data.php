<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryProductListResponseBody\data\productList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The service definitions.
     *
     * @var productList
     */
    public $productList;

    /**
     * @description The total number of services.
     *
     * @example 449
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'productList' => 'ProductList',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productList) {
            $res['ProductList'] = null !== $this->productList ? $this->productList->toMap() : null;
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
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductList'])) {
            $model->productList = productList::fromMap($map['ProductList']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
