<?php

namespace TheSslStore\Request\User;

use TheSslStore\Core\BaseRequest;

class Activate extends BaseRequest
{
    public $PartnerCode;
    public $CustomPartnerCode;
    public $AuthenticationToken;
    public $PartnerEmail;
    public $isEnabled;
}
