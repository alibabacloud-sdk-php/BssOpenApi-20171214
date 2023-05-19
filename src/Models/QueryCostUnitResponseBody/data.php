<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponseBody\data\costUnitDtoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The cost centers.
     *
     * @var costUnitDtoList[]
     */
    public $costUnitDtoList;

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
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'costUnitDtoList' => 'CostUnitDtoList',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->costUnitDtoList) {
            $res['CostUnitDtoList'] = [];
            if (null !== $this->costUnitDtoList && \is_array($this->costUnitDtoList)) {
                $n = 0;
                foreach ($this->costUnitDtoList as $item) {
                    $res['CostUnitDtoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['CostUnitDtoList'])) {
            if (!empty($map['CostUnitDtoList'])) {
                $model->costUnitDtoList = [];
                $n                      = 0;
                foreach ($map['CostUnitDtoList'] as $item) {
                    $model->costUnitDtoList[$n++] = null !== $item ? costUnitDtoList::fromMap($item) : $item;
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
