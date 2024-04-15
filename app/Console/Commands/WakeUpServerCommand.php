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
        $response = Http::get('http://your-server.com/wakeup');

        if ($response->successful()) {
            return response('Server woken up successfully', 200);
        } else {
            return response('Server wake up failed with status code: ' . $response->getStatusCode(), 500);
        }
    }
}
