<?php

namespace App\Broadcasting;

use App\Models\User;

class ChatChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
   

    public function join(): array
    {
        if (! auth()->check()) {
            return false;
        }
 
        return [
            'id' => auth()->id(),
            'name' => auth()->user()->nom,
        ];
    }
}
