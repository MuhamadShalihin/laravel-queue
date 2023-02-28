<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendReminderEmail;

class QueueController extends Controller
{
    public function sendReminderEmail()
    {
        $emailJob = new SendReminderEmail();
        $this->dispatch($emailJob);
    }
}
