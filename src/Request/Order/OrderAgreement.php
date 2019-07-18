<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\OrganizationAddress;
use hasnhasan\TheSslStore\Core\OrganizationInfo;
use hasnhasan\TheSslStore\Core\WebServerTypeValidator;

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
