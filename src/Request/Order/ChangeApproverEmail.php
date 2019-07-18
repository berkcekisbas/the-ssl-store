<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;

class ChangeApproverEmail extends BaseRequest
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
