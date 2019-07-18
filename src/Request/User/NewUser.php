<?php

namespace TheSslStore\Request\User;

use TheSslStore\Core\BaseRequest;

class NewUser extends BaseRequest
{
	public $Email;
	public $Password;
	public $FirstName;
	public $LastName;
	public $AlternateEmail;
	public $CompanyName;
	public $Street;
	public $CountryName;
	public $State;
	public $City;
	public $Zip;
	public $Phone;
	public $Fax;
	public $Mobile;
	public $HearedBy;
}
