<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionDetailsResponseBody\data\accountTransactionsList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the account.
     *
     * @example yidi
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The details of the transactions within the account.
     *
     * @var accountTransactionsList
     */
    public $accountTransactionsList;

    /**
     * @description This parameter is invalid.
     *
     * @example 0
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for paging.
     *
     * @example ASHDADS
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accountName'             => 'AccountName',
        'accountTransactionsList' => 'AccountTransactionsList',
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'totalCount'              => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountTransactionsList) {
            $res['AccountTransactionsList'] = null !== $this->accountTransactionsList ? $this->accountTransactionsList->toMap() : null;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountTransactionsList'])) {
            $model->accountTransactionsList = accountTransactionsList::fromMap($map['AccountTransactionsList']);
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
