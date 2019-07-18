<?php

namespace TheSslStore\Request\Setting;

use TheSslStore\Core\BaseRequest;

class SetTemplate extends BaseRequest
{
    public $EmailSubject;
    public $EmailMessage;
    public $isDisabled;
    public $EmailTemplateTypes;
}
