<?php

namespace TheSslStore\Request\User;

use TheSslStore\Core\BaseRequest;

class AccountDetail extends BaseRequest
{
    public $PartnerCode;
    public $AuthToken;
    public $ReplayToken;
    public $UserAgent;
    public $IPAddress;
}
