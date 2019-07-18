<?php

namespace TheSslStore\Request;

use TheSslStore\Core\BaseRequest;

class HealthValidate extends BaseRequest
{
	public $PartnerCode;
	public $AuthToken;
	public $ReplayToken;
	public $UserAgent;
}
