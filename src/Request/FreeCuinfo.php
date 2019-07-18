<?php

namespace hasnhasan\TheSslStore\Request;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\Contact;
use hasnhasan\TheSslStore\Core\OrganizationAddress;
use hasnhasan\TheSslStore\Core\OrganizationInfo;
use hasnhasan\TheSslStore\Core\WebServerTypeValidator;

class FreeCuinfo extends BaseRequest
{
	use WebServerTypeValidator;

	public function __construct($args = [])
	{
		$this->OrganizationInfo                      = new OrganizationInfo();
		$this->OrganizationInfo->OrganizationAddress = new OrganizationAddress();
		$this->AdminContact                          = new Contact();
		$this->TechnicalContact                      = new Contact();

		self::validateWebServerType($args);

		parent::__construct($args);
	}

	public $CustomOrderID;
	public $ProductCode;
	public $ExtraProductCodes;
	public $OrganizationInfo;
	public $ValidityPeriod;
	public $ServerCount;
	public $CSR;
	public $DomainName;
	public $WebServerType;
	public $DNSNames;
	public $isCUOrder;
	public $isRenewalOrder;
	public $SpecialInstructions;
	public $Relatedhasnhasan\TheSslStoreOrderID;
	public $isTrialOrder;
	public $AdminContact;
	public $TechnicalContact;
	public $ApproverEmail;
	public $ReserveSANCount;
	public $AddInstallationSupport;
	public $EmailLanguageCode;
	public $FileAuthDVIndicator;
	public $CNAMEAuthDVIndicator;
	public $HTTPSFileAuthDVIndicator;
	public $SignatureHashAlgorithm;
}
