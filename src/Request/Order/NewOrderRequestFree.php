<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Core\Contact;

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
    public $Relatedhasnhasan\TheSslStoreOrderID;
    public $ValidityPeriod;
    public $ServerCount;
}
