<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponseBody\data\customerInvoiceAddressList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The details of addresses to which invoices are mailed.
     *
     * @var customerInvoiceAddressList
     */
    public $customerInvoiceAddressList;
    protected $_name = [
        'customerInvoiceAddressList' => 'CustomerInvoiceAddressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerInvoiceAddressList) {
            $res['CustomerInvoiceAddressList'] = null !== $this->customerInvoiceAddressList ? $this->customerInvoiceAddressList->toMap() : null;
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
        if (isset($map['CustomerInvoiceAddressList'])) {
            $model->customerInvoiceAddressList = customerInvoiceAddressList::fromMap($map['CustomerInvoiceAddressList']);
        }

        return $model;
    }
}
