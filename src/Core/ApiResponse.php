<?php

namespace hasnhasan\TheSslStore\Core;


class ApiResponse
{
    public $isError             = false;
    public $Message;
    public $Timestamp           = '';
    public $ReplayToken         = '';
    public $InvokingPartnerCode = '';

    public function __toString(): string
    {
        return var_export($this, true);
    }
}
