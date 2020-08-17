<?php

namespace App\Listeners;

use App\Events\CategoriesCreatedEvent;
use App\Mail\CategoriesStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CategoriesCreatedListener
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
     * @param  CategoriesCreatedEvent  $event
     * @return void
     */
    public function handle(CategoriesCreatedEvent $event)
    {
        \Mail::to('khinmyonwe1995@gmail.com')->send(new CategoriesStored($event->category));
    }
}
