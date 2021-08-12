<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var accountTransactionsList
     */
    public $accountTransactionsList;
    protected $_name = [
        'nextToken'               => 'NextToken',
        'totalCount'              => 'TotalCount',
        'maxResults'              => 'MaxResults',
        'accountName'             => 'AccountName',
        'accountTransactionsList' => 'AccountTransactionsList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountTransactionsList) {
            $res['AccountTransactionsList'] = null !== $this->accountTransactionsList ? $this->accountTransactionsList->toMap() : null;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountTransactionsList'])) {
            $model->accountTransactionsList = accountTransactionsList::fromMap($map['AccountTransactionsList']);
        }

        return $model;
    }
}
