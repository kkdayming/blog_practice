<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup everything.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        `php artisan migrate:refresh --path=/database/migrations/ --seed`;
        `php artisan admin:install`;
        `php artisan admin:generate-menu`;
        `php artisan storage:link`;
        `php artisan ide-helper:generate`;
        $this->info('setup:migrate Finish!');
        return Command::SUCCESS;
    }
}
