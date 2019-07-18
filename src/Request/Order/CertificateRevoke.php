<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;

class CertificateRevoke extends BaseRequest
{
    public $CustomOrderID;
    public $TheSSLStoreOrderID;
    public $ResendEmail;
    public $SerialNumber;
}
