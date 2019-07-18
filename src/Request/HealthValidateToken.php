<?php

namespace hasnhasan\TheSslStore\Request;

use hasnhasan\TheSslStore\Core\BaseRequest;

class HealthValidateToken extends BaseRequest
{
	public $Token;
	public $TokenID;
	public $TokenCode;
	public $IsUsedForTokenSystem = true;
}
