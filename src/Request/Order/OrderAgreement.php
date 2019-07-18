<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Core\OrganizationAddress;
use TheSslStore\Core\OrganizationInfo;
use TheSslStore\Core\WebServerTypeValidator;

class OrderAgreement extends BaseRequest
{
    use WebServerTypeValidator;

    public function __construct($args = [])
    {
        $this->OrganizationInfo                      = new OrganizationInfo();
        $this->OrganizationInfo->OrganizationAddress = new OrganizationAddress(
        );

        self::validateWebServerType($args);

        parent::__construct($args);
    }

    public $CustomOrderID;
    public $ProductCode;
    public $ExtraProductCodes;
    public $OrganizationInfo;
    public $ValidityPeriod;
    public $ServerCount;
    public $CSR;
    public $DomainName;
    public $WebServerType;
}
