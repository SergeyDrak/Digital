<?php

namespace Sergeydrak\SubscriptionBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SubscriptionBundle extends Bundle
{

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

}