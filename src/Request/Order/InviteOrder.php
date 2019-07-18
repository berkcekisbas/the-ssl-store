<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;

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
