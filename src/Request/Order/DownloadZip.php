<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\DateTimeCultureValidator;

class DownloadZip extends BaseRequest
{
    use DateTimeCultureValidator;

    public $CustomOrderID;
    public $hasnhasan\TheSslStoreOrderID;
    public $ResendEmailType;
    public $ResendEmail;
    public $RefundReason;
    public $RefundRequestID;
    public $ApproverMethod;
    public $DomainNames;
    public $SerialNumber;
    public $ReturnPKCS7Cert;
    public $DateTimeCulture;

    public function __construct(array $args = [])
    {
        parent::__construct($args);
    }
}
