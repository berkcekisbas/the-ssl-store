<?php

namespace hasnhasan\TheSslStore\Request\Order;

use hasnhasan\TheSslStore\Core\BaseRequest;

class ModifiedSummary extends BaseRequest
{
    public $SubUserID;
    public $StartDate;
    public $EndDate;
    public $PageNumber;
    public $PageSize;
}
