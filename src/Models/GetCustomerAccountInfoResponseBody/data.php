<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetCustomerAccountInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $mpk;

    /**
     * @var string
     */
    public $loginEmail;

    /**
     * @var string
     */
    public $hostingStatus;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $creditLimitStatus;

    /**
     * @var bool
     */
    public $isCertified;
    protected $_name = [
        'mpk'               => 'Mpk',
        'loginEmail'        => 'LoginEmail',
        'hostingStatus'     => 'HostingStatus',
        'accountType'       => 'AccountType',
        'creditLimitStatus' => 'CreditLimitStatus',
        'isCertified'       => 'IsCertified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mpk) {
            $res['Mpk'] = $this->mpk;
        }
        if (null !== $this->loginEmail) {
            $res['LoginEmail'] = $this->loginEmail;
        }
        if (null !== $this->hostingStatus) {
            $res['HostingStatus'] = $this->hostingStatus;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->creditLimitStatus) {
            $res['CreditLimitStatus'] = $this->creditLimitStatus;
        }
        if (null !== $this->isCertified) {
            $res['IsCertified'] = $this->isCertified;
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
        if (isset($map['Mpk'])) {
            $model->mpk = $map['Mpk'];
        }
        if (isset($map['LoginEmail'])) {
            $model->loginEmail = $map['LoginEmail'];
        }
        if (isset($map['HostingStatus'])) {
            $model->hostingStatus = $map['HostingStatus'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CreditLimitStatus'])) {
            $model->creditLimitStatus = $map['CreditLimitStatus'];
        }
        if (isset($map['IsCertified'])) {
            $model->isCertified = $map['IsCertified'];
        }

        return $model;
    }
}
