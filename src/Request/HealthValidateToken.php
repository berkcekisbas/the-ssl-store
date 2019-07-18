<?php

namespace TheSslStore\Request;

use TheSslStore\Core\BaseRequest;

class HealthValidateToken extends BaseRequest
{
	public $Token;
	public $TokenID;
	public $TokenCode;
	public $IsUsedForTokenSystem = true;
}
