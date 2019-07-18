<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class Query extends BaseRequest
{
    public $StartDate;
    public $EndDate;
    public $CertificateExpireToDate;
    public $CertificateExpireFromDate;
    public $DomainName;
    public $SubUserID;
    public $ProductCode;
    public $DateTimeCulture;
    public $PageNumber;
    public $PageSize;
}
