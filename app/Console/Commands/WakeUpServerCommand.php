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
        try {
            $client = new Client();
            $response = $client->get(env('SERVER_URL'));

            if ($response->getStatusCode() == 200) {
                $this->info('Server woken up successfully');
                return 0; // success
            } else {
                $this->error('Server wake up failed with status code: ' . $response->getStatusCode());
                return 1; // error
            }
        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
            return 3; // error
        }
    }
}
