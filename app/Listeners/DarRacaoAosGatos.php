<?php

namespace App\Listeners;

use App\Events\JaSao6Horas;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;



class DarRacaoAosGatos implements ShouldQueue
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
        logger('Dando ração aos gatos! '.__CLASS__);
    }
}
