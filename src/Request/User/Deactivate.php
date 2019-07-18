<?php

namespace hasnhasan\TheSslStore\Request\User;

use hasnhasan\TheSslStore\Core\BaseRequest;

class Deactivate extends BaseRequest
{
	public $PartnerCode;
	public $CustomPartnerCode;
	public $AuthenticationToken;
	public $PartnerEmail;
	public $isEnabled;
}
