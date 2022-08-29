<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\MakeApiRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class ConnectAPI extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'connect woo commerce api';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
       MakeApiRequest::dispatch();
      
        \Log::info("connection is working.");
        return 0;
    }
}

