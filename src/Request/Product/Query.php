<?php

namespace hasnhasan\TheSslStore\Request\Product;

use hasnhasan\TheSslStore\Core\BaseRequest;

class Query extends BaseRequest
{
    public $ProductCode;
    public $ProductType;
    public $NeedSortedList;
}
