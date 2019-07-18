<?php

namespace hasnhasan\TheSslStore\Response\Order;

use hasnhasan\TheSslStore\Core\BaseResponse;

class DownloadZip extends BaseResponse
{
	public $PartnerOrderID;
	public $CertificateStatus;
	public $ValidationStatus;
	public $Zip;
	public $pkcs7zip;
	public $CertificateStartDate;
	public $CertificateEndDate;
	public $CertificateStartDateInUTC;
	public $CertificateEndDateInUTC;
}
