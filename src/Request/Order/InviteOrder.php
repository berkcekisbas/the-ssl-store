<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class InviteOrder extends BaseRequest
{
    public $PreferVendorLink;
    public $ProductCode;
    public $ExtraProductCode;
    public $ServerCount;
    public $RequestorEmail;
    public $ExtraSAN;
    public $CustomOrderID;
    public $ValidityPeriod;
    public $AddInstallationSupport;
    public $SignatureHashAlgorithm;
    public $EmailLanguageCode;
    public $PreferSendOrderEmails;
    public $CertTransparencyIndicator;
    public $DateTimeCulture;
}
