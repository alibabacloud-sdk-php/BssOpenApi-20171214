<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponseBody\data\moduleList\module\configList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var configList
     */
    public $configList;

    /**
     * @description The currency. Default value: CNY.
     *
     * @example CNY
     *
     * @var string
     */
    public $currency;

    /**
     * @description The code of the pricing module.
     *
     * @example InstanceType
     *
     * @var string
     */
    public $moduleCode;

    /**
     * @description The name of the pricing module.
     *
     * @example Instance
     *
     * @var string
     */
    public $moduleName;

    /**
     * @description The price type. Valid values:
     *
     *   Usage: usage price
     *   Hour: hourly price
     *   Day: daily price
     *   Week: weekly price
     *   Month: monthly price
     *   Year: annual price
     *
     * @example Month
     *
     * @var string
     */
    public $priceType;
    protected $_name = [
        'configList' => 'ConfigList',
        'currency'   => 'Currency',
        'moduleCode' => 'ModuleCode',
        'moduleName' => 'ModuleName',
        'priceType'  => 'PriceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configList) {
            $res['ConfigList'] = null !== $this->configList ? $this->configList->toMap() : null;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->priceType) {
            $res['PriceType'] = $this->priceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigList'])) {
            $model->configList = configList::fromMap($map['ConfigList']);
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['PriceType'])) {
            $model->priceType = $map['PriceType'];
        }

        return $model;
    }
}
