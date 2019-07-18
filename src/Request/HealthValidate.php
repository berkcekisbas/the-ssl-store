<?php

namespace hasnhasan\TheSslStore\Request;

use hasnhasan\TheSslStore\Core\BaseRequest;

class HealthValidate extends BaseRequest
{
	public $PartnerCode;
	public $AuthToken;
	public $ReplayToken;
	public $UserAgent;
}
