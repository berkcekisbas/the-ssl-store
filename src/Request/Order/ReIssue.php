<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\WebServerTypeValidator;

class ReIssue extends BaseRequest
{
    use WebServerTypeValidator;

    public function __construct($args = [])
    {
        $this->EditSAN   = [];
        $this->DeleteSAN = [];
        $this->AddSAN    = [];

        self::validateWebServerType($args);

        parent::__construct($args);
    }

    public $hasnhasan\TheSslStoreOrderID;
    public $CSR;
    public $WebServerType;
    public $DNSNames;
    public $SpecialInstructions;
    public $EditSAN;
    public $DeleteSAN;
    public $AddSAN;
    public $isWildCard;
    public $ReissueEmail;
    public $PreferEnrollmentLink;
    public $SignatureHashAlgorithm;
    public $FileAuthDVIndicator;
    public $HTTPSFileAuthDVIndicator;
    public $CNAMEAuthDVIndicator;
    public $ApproverEmails;
    public $CertTransparencyIndicator;
    public $DateTimeCulture;
    public $CSRUniqueValue;
}
