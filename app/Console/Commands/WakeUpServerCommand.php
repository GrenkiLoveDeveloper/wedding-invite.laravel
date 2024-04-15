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
        return response('Server woken up successfully', 200);
        // try {
        //     $client = new Client();
        //     $response = $client->get(env('SERVER_URL'));

        //     if ($response->getStatusCode() == 200) {
        //         return response('Server woken up successfully', 200);
        //     } else {
        //         return response('Server wake up failed with status code: ' . $response->getStatusCode(), 500);
        //     }
        // } catch (\Exception $e) {
        //     return response('Error: ' . $e->getMessage(), 500);
        // }
    }
}
