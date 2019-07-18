<?php

namespace hasnhasan\TheSslStore\Request;

use hasnhasan\TheSslStore\Core\BaseRequest;
use hasnhasan\TheSslStore\Request\Order\NewOrderRequestFree;

class FreeClaimFree extends BaseRequest
{
	public $ProductCode;
	public $Relatedhasnhasan\TheSslStoreOrderID;
	public $NewOrderRequest;

	public function __construct($args = [])
	{
		$this->NewOrderRequest = new NewOrderRequestFree();

		parent::__construct($args);
	}
}
