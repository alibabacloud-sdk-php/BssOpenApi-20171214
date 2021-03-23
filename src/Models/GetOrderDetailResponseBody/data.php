<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetOrderDetailResponseBody\data\orderList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var orderList
     */
    public $orderList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'pageSize'   => 'PageSize',
        'pageNum'    => 'PageNum',
        'hostName'   => 'HostName',
        'orderList'  => 'OrderList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->orderList) {
            $res['OrderList'] = null !== $this->orderList ? $this->orderList->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['OrderList'])) {
            $model->orderList = orderList::fromMap($map['OrderList']);
        }

        return $model;
    }
}
