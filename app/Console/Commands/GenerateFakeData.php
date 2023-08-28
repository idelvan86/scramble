<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Scramble;

class GenerateFakeData extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:fake-data {count=10}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate fake data for Scramble model';

    /**
     * Execute the console command.
     */

     public function __construct()
     {
         parent::__construct();
     }

    public function handle()
    {
        $count = (int) $this->argument('count');
        Scramble::createFakeData($count);
        $this->info("$count fake records generated for Scramble model.");
    }
}
