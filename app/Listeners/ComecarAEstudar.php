<?php

namespace App\Listeners;

use App\Events\JaSao6Horas;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ComecarAEstudar
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
    public function handle(JaSao6Horas $event): void
    {
        sleep(2);
        logger('comecei a estudar!'.__CLASS__);
    }
}
