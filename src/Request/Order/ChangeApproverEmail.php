<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class ChangeApproverEmail extends BaseRequest
{
    public $CustomOrderID;
    public $hasnhasan\TheSslStoreOrderID;
    public $ResendEmailType;
    public $ResendEmail;
    public $RefundReason;
    public $RefundRequestID;
    public $ApproverMethod;
    public $DomainNames;
    public $SerialNumber;
}
