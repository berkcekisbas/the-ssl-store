<?php

namespace hasnhasan\TheSslStore\Response\Order;

use hasnhasan\TheSslStore\Core\BaseResponse;

class Download extends BaseResponse
{
    public $PartnerOrderID;
    public $CertificateStatus;
    public $ValidationStatus;
    public $Certificates;
    public $CertificateStartDate;
    public $CertificateEndDate;
    public $CertificateStartDateInUTC;
    public $CertificateEndDateInUTC;
}
