<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:37 PM
 */

namespace TheSslStore\Response;

use TheSslStore\Core\BaseResponse;

class FreeClaimfree extends BaseResponse
{
    public $isAllowed;
    public $PartnerOrderID;
    public $TheSSLStoreOrderID;
    public $VendorOrderID;
    public $LoginName;
    public $LoginPassword;
}
