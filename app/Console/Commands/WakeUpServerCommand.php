<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class WakeUpServerCommand extends Command
{
    protected $signature = 'server:wakeup';

    protected $description = 'Send a GET request to the server to wake it up';

    public function handle()
    {
        $client = new Client();
        $client->get(env('SERVER_URL'));
    }
}
