<?php
/**
 * Created by IntelliJ IDEA.
 * User: nikolayyotsov
 * Date: 7/19/17
 * Time: 5:39 PM
 */

namespace TheSslStore\Response;

use TheSslStore\Core\BaseResponse;
use TheSslStore\Core\OrderStatus;

class HealthValidateToken extends BaseResponse
{
    public function __construct()
    {
        $this->OrderStatus = new OrderStatus();
        parent::__construct();
    }

    public $ProductName;
    public $ProductCode;
    public $San;
    public $OrderStatus;
    public $NumberOfMonths;
    public $ServerCount;
    public $isRenewalOrder;
    public $ProductType;
    public $VendorName;
}
