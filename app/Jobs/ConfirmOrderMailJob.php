<?php

namespace App\Jobs;

use App\Notifications\DemoEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ConfirmOrderMailJob implements ShouldQueue
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
    }
}
