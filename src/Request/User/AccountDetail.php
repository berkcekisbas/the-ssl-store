<?php

namespace hasnhasan\TheSslStore\Request\User;

use hasnhasan\TheSslStore\Core\BaseRequest;

class AccountDetail extends BaseRequest
{
    public $PartnerCode;
    public $AuthToken;
    public $ReplayToken;
    public $UserAgent;
    public $IPAddress;
}
