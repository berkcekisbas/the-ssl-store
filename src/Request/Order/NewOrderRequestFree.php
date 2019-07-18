<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Core\Contact;

class NewOrderRequestFree extends BaseRequest
{
    public function __construct($args = [])
    {
        $this->TechnicalContact = new Contact();
        parent::__construct($args);
    }

    public $TechnicalContact;
    public $CSR;
    public $isCUOrder;
    public $isRenewalOrder;
    public $isTrialOrder;
    public $ProductCode;
    public $RelatedTheSSLStoreOrderID;
    public $ValidityPeriod;
    public $ServerCount;
}
