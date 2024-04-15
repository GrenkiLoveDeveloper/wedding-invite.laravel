<?php

namespace App\Console\Commands;

use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
                $message = 'Server woken up successfully';
                $this->info($message);
                Log::info($message);
                return 0; // success
            } else {
                $message = 'Server wake up failed with status code: ' . $response->getStatusCode();
                $this->error($message);
                Log::error($message);
                return 1; // error
            }
        } catch (\Exception $e) {
            $message = 'Error: ' . $e->getMessage();
            $this->error($message);
            Log::error($message);
            return 3; // error
        }
    }
}
