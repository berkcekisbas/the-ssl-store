<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\WebServerTypeValidator;

class Validate extends BaseRequest
{
    use WebServerTypeValidator;

    public $CSR;
    public $ProductCode;
    public $ServerCount;
    public $ValidityPeriod;
    public $WebServerType;

    public function __construct(array $args = [])
    {
        self::validateWebServerType($args);

        parent::__construct($args);
    }
}
