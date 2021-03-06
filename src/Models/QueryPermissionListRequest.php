<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryPermissionListRequest extends Model
{
    /**
     * @var int
     */
    public $relationId;
    protected $_name = [
        'relationId' => 'RelationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPermissionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }

        return $model;
    }
}
