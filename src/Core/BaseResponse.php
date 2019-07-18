<?php

namespace TheSslStore\Core;


class BaseResponse
{
    public $AuthResponse;

    public function __construct()
    {
        $this->AuthResponse = new apiresponse();
    }

    public function __toString(): string
    {
        return var_export($this, true);
    }

}
