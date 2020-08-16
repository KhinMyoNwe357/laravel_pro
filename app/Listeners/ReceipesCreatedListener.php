<?php

namespace App\Listeners;

use App\Events\ReceipesCreatedEvent;
use App\Mail\ReceipeStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ReceipesCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReceipesCreatedEvent  $event
     * @return void
     */
    public function handle(ReceipesCreatedEvent $event)
    {
        \Mail::to('khinmyonwe1995@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
