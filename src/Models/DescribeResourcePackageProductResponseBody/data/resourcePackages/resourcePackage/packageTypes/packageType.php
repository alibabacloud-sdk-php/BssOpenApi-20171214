<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\properties;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages\resourcePackage\packageTypes\packageType\specifications;
use AlibabaCloud\Tea\Model;

class packageType extends Model
{
    /**
     * @example FPT_ossbag_deadlineAcc_CdnOut_common_sz
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $name;

    /**
     * @var properties
     */
    public $properties;

    /**
     * @var specifications
     */
    public $specifications;
    protected $_name = [
        'code'           => 'Code',
        'name'           => 'Name',
        'properties'     => 'Properties',
        'specifications' => 'Specifications',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }
        if (null !== $this->specifications) {
            $res['Specifications'] = null !== $this->specifications ? $this->specifications->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packageType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }
        if (isset($map['Specifications'])) {
            $model->specifications = specifications::fromMap($map['Specifications']);
        }

        return $model;
    }
}
