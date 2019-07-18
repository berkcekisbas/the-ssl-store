<?php

namespace TheSslStore\Request\Order;

use TheSslStore\Core\BaseRequest;

class ModifiedSummary extends BaseRequest
{
    public $SubUserID;
    public $StartDate;
    public $EndDate;
    public $PageNumber;
    public $PageSize;
}
