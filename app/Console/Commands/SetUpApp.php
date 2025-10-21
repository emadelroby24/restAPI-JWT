<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class SetUpApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup-app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command runs the full project setup.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh', [
            '--seed' => true
        ]);
        $this->line('The project installed successfully.');
    }
}
