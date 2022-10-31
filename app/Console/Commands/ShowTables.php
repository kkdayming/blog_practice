<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ShowTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'show:tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show all tables in the database.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tables = [];
        $rawTables = DB::select('SHOW TABLES');
        foreach ($rawTables as $table) {
            array_push($tables, $table->Tables_in_default);
        }
        $this->info("All Tables\n" . json_encode($tables));
        return Command::SUCCESS;
    }
}
