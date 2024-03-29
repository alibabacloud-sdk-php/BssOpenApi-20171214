<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data\periodCoverage;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourceCoverageTotalResponseBody\data\totalCoverage;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the coverage rate of deduction plans within a period.
     *
     * @var periodCoverage[]
     */
    public $periodCoverage;

    /**
     * @description The information about the total coverage data of deduction plans.
     *
     * @var totalCoverage
     */
    public $totalCoverage;
    protected $_name = [
        'periodCoverage' => 'PeriodCoverage',
        'totalCoverage'  => 'TotalCoverage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodCoverage) {
            $res['PeriodCoverage'] = [];
            if (null !== $this->periodCoverage && \is_array($this->periodCoverage)) {
                $n = 0;
                foreach ($this->periodCoverage as $item) {
                    $res['PeriodCoverage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCoverage) {
            $res['TotalCoverage'] = null !== $this->totalCoverage ? $this->totalCoverage->toMap() : null;
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
        if (isset($map['PeriodCoverage'])) {
            if (!empty($map['PeriodCoverage'])) {
                $model->periodCoverage = [];
                $n                     = 0;
                foreach ($map['PeriodCoverage'] as $item) {
                    $model->periodCoverage[$n++] = null !== $item ? periodCoverage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCoverage'])) {
            $model->totalCoverage = totalCoverage::fromMap($map['TotalCoverage']);
        }

        return $model;
    }
}
