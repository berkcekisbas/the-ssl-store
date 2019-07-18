<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;

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
