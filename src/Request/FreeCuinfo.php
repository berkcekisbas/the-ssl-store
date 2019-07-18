<?php

namespace TheSslStore\Request;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Core\Contact;
use TheSslStore\Core\OrganizationAddress;
use TheSslStore\Core\OrganizationInfo;
use TheSslStore\Core\WebServerTypeValidator;

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
	public $RelatedTheSSLStoreOrderID;
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
