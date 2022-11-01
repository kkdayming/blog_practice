<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetupAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup:all';

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
        #this->call;
        `composer update`;
        `php artisan migrate:refresh --path=/database/migrations/ --seed`;
        `php artisan admin:install`;
        `php artisan admin:generate-menu`;
        `php artisan storage:link`;
        `php artisan ide-helper:generate`;
        $this->info('setup:all Finish!');
        return Command::SUCCESS;
    }
}
