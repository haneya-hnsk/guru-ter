<?php

namespace App\Providers;

use App\Events\UserVoted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreUserVoted
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
    public function handle(UserVoted $event)
    {
         return redirect('/commit');
    }
}
