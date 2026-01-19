<?php

namespace App\Listeners;

use App\Events\CustomerEvent;
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
    public function handle(CustomerEvent $event): void
    {
       $customer = $event->customer;
       $user = User::create([
        "name"=> $customer->name,
        "email"=> $customer->email,
        "password"=> bcrypt('nazi121212'),
        "user_type"=> "Customer",
       ]);
       $customer->user_id = $user->id;
       $customer->save();
    }
}
