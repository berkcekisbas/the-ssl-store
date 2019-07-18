<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Core\DateTimeCultureValidator;

class DownloadZip extends BaseRequest
{
    use DateTimeCultureValidator;

    public $CustomOrderID;
    public $TheSSLStoreOrderID;
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
