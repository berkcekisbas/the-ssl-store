<?php

namespace TheSslStore\Request;

use TheSslStore\Core\BaseRequest;
use TheSslStore\Request\Order\NewOrderRequestFree;

class FreeClaimFree extends BaseRequest
{
	public $ProductCode;
	public $RelatedTheSSLStoreOrderID;
	public $NewOrderRequest;

	public function __construct($args = [])
	{
		$this->NewOrderRequest = new NewOrderRequestFree();

		parent::__construct($args);
	}
}
