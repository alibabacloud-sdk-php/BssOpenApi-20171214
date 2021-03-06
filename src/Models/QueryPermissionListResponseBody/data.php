<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPermissionListResponseBody\data\permissionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $masterId;

    /**
     * @var int
     */
    public $memberId;

    /**
     * @var string
     */
    public $setupTime;

    /**
     * @var permissionList[]
     */
    public $permissionList;
    protected $_name = [
        'endTime'        => 'EndTime',
        'relationType'   => 'RelationType',
        'startTime'      => 'StartTime',
        'state'          => 'State',
        'masterId'       => 'MasterId',
        'memberId'       => 'MemberId',
        'setupTime'      => 'SetupTime',
        'permissionList' => 'PermissionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->masterId) {
            $res['MasterId'] = $this->masterId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->setupTime) {
            $res['SetupTime'] = $this->setupTime;
        }
        if (null !== $this->permissionList) {
            $res['PermissionList'] = [];
            if (null !== $this->permissionList && \is_array($this->permissionList)) {
                $n = 0;
                foreach ($this->permissionList as $item) {
                    $res['PermissionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['MasterId'])) {
            $model->masterId = $map['MasterId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['SetupTime'])) {
            $model->setupTime = $map['SetupTime'];
        }
        if (isset($map['PermissionList'])) {
            if (!empty($map['PermissionList'])) {
                $model->permissionList = [];
                $n                     = 0;
                foreach ($map['PermissionList'] as $item) {
                    $model->permissionList[$n++] = null !== $item ? permissionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
