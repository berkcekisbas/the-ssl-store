<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class CertificateRevoke extends BaseRequest
{
    public $CustomOrderID;
    public $hasnhasan\TheSslStoreOrderID;
    public $ResendEmail;
    public $SerialNumber;
}
