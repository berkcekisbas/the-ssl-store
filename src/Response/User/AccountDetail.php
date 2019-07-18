<?php

namespace hasnhasan\TheSslStore\Response\User;

use hasnhasan\TheSslStore\Core\BaseResponse;

class AccountDetail extends BaseResponse
{
	public $PartnerCode;
	public $CompanyName;
	public $FullName;
	public $Email;
	public $AlternateEmail;
	public $AccountType;
	public $AccountBalance;
	public $CurrentPlan;
	public $AllowCredit;
}
