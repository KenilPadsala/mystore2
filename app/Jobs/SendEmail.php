<?php

namespace App\Jobs;

use App\Notifications\DemoEmail;
use App\Notifications\FestivalOfferEmail;
use App\Notifications\PurchaseOrderDone;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class SendEmail implements ShouldQueue
{
    use Queueable;

    public $user;
    public $data;
    /**
     * Create a new job instance.
     */
    public function __construct($user, $data)
    {
        $this->user = $user;
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->user->notify(new DemoEmail($this->data));
        // $this->user->notify(new FestivalOfferEmail($this->data));
        // $this->user->notify(new PurchaseOrderDone());
        // $this->user->notify(new DemoEmail($this->data));
        // $this->user->notify(new FestivalOfferEmail($this->data));
        // $this->user->notify(new PurchaseOrderDone());
    }
}
