<?php

namespace hasnhasan\TheSslStore\Request\Setting;

use hasnhasan\TheSslStore\Core\BaseRequest;

class SetTemplate extends BaseRequest
{
    public $EmailSubject;
    public $EmailMessage;
    public $isDisabled;
    public $EmailTemplateTypes;
}
