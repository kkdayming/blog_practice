<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show current database.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Currenct Database: ' . DB::connection()->getDatabaseName());
        return Command::SUCCESS;
    }
}
