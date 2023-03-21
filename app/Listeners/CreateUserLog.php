<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Models\LogActivity;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserLog
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
    public function handle(UserCreated $event): void
    {
        LogActivity::create([
            'description' => 'create user bernama '. $event->user->name
        ]);
    }
}
