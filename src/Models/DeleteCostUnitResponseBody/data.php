<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DeleteCostUnitResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether the call is complete.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The user ID of the cost center owner.
     *
     * @example 12431
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The ID of the cost center.
     *
     * @example 123412343
     *
     * @var int
     */
    public $unitId;
    protected $_name = [
        'isSuccess' => 'IsSuccess',
        'ownerUid'  => 'OwnerUid',
        'unitId'    => 'UnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }

        return $model;
    }
}
