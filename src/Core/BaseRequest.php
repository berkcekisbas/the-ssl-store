<?php


namespace hasnhasan\TheSslStore\Core;

class BaseRequest
{
    public $AuthRequest;

    public function __construct(array $args = [])
    {
        $this->map($args);
        
        $this->AuthRequest = new ApiRequest();
    }

    public function __toString() : string
    {
        return var_export($this, true);
    }

    private function map(array $args = [])
    {
        foreach ($args as $propName => $propVal ) {
            property_exists($this, $propName)
                ? $this->$propName = $propVal
                : null;
        }
    }
}
