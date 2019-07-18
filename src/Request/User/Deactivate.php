<?php

namespace TheSslStore\Request\User;

use TheSslStore\Core\BaseRequest;

class Deactivate extends BaseRequest
{
	public $PartnerCode;
	public $CustomPartnerCode;
	public $AuthenticationToken;
	public $PartnerEmail;
	public $isEnabled;
}
