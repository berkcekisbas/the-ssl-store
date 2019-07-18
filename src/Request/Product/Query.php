<?php

namespace TheSslStore\Request\Product;

use TheSslStore\Core\BaseRequest;

class Query extends BaseRequest
{
    public $ProductCode;
    public $ProductType;
    public $NeedSortedList;
}
