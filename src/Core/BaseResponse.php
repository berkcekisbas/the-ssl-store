<?php

namespace hasnhasan\TheSslStore\Core;


class BaseResponse
{
    public $AuthResponse;

    public function __construct()
    {
        $this->AuthResponse = new ApiResponse();
    }

    public function __toString(): string
    {
        return var_export($this, true);
    }

}
