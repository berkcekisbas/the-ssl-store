<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Core\WebServerTypeValidator;

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
