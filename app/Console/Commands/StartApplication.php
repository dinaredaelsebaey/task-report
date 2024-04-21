<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartApplication extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('serve');
        $this->call('queue:work');        
        return 0;
    }
}
