<?php

namespace App\Events;

use App\Common\DTOs\UserData;
use Events;

class UserCreatedEvent extends AbstractEvent
{
    public string $type;

    public function __construct(public UserData $data)
    {
        $this->type = Events::USER_CREATED->value;
    }
}
