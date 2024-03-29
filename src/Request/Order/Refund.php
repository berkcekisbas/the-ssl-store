<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class Refund extends BaseRequest
{
    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $ResendEmailType;
    public $ResendEmail;
    public $RefundReason;
    public $RefundRequestID;
    public $ApproverMethod;
    public $DomainNames;
    public $SerialNumber;
}
