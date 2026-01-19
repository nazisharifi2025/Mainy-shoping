<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateLisetners
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $castomer = $event->customer;
        $users = new User();
        $users->name = $castomer->name;
        $users->email = $castomer->email;
        $users->password = bcrypt('121212nazi');
        $users->save();
    }
}
