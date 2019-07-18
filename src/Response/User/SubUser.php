<?php

namespace TheSslStore\Response\User;

use TheSslStore\Core\BaseResponse;

class SubUser extends BaseResponse
{
	public $PartnerCode;
	public $CustomPartnerCode;
	public $AuthenticationToken;
	public $PartnerEmail;
	public $isEnabled;
}
