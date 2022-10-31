<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LaradockRebuild extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laradock:rebuild';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'for laradock: compose down, rmi laradock images, compose up.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Running docker-compose down in laradock...');
        `(cd ./laradock && docker-compose down)`;
        $this->info('Remove all laradock images...');
        `(cd ./laradock && docker rmi laradock-mysql laradock-nginx laradock-php-fpm laradock-redis laradock-phpmyadmin laradock-workspace)`;
        $this->info('Remove all docker unused volumes...');
        `(cd ./laradock && docker volume prune -f)`;
        $this->info('Running docker-compose up in laradock...');
        `(cd ./laradock && docker-compose up -d nginx mysql phpmyadmin redis workspace )`;
        $this->info('Migrating and seeding fake data...');
        $this->info("Finish!\n
            And you can run these command step by step to migrate and fake data:\n
            docker exec -it laradock-php-fpm-1 bash\n
            php artisan migrate:refresh --path=/database/migrations/ --seed\n
            php artisan admin:install\n
            php artisan admin:generate-menu\n
            exit\n");
        return Command::SUCCESS;
    }
}
