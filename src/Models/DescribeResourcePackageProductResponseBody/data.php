<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details about the resource plans.
     *
     * @var resourcePackages
     */
    public $resourcePackages;
    protected $_name = [
        'resourcePackages' => 'ResourcePackages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourcePackages) {
            $res['ResourcePackages'] = null !== $this->resourcePackages ? $this->resourcePackages->toMap() : null;
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
        if (isset($map['ResourcePackages'])) {
            $model->resourcePackages = resourcePackages::fromMap($map['ResourcePackages']);
        }

        return $model;
    }
}
