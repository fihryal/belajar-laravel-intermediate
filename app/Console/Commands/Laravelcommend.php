<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravelcommend extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
                            {argument : ini adalah descripsi argument}
                            {--o|opsi= : ini adalah descripsi opsi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravel basic command';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info("informas yang muncul dalam terminal");
        $this->error("something when wrong");
        $this->line("display this on the screen");

        // $this->line(print_r($this->options()) . '' . print_r($this->arguments()));
        
        $this->line($this->argument('argument') . " " . $this->option('opsi'));
        
        $name = $this->ask("what is your name?");
        $password = $this->secret("what is your name?");

        if ($this->confirm("Do you want to continue")) {
            $this->line($name . " " . $password);
        }

    }
}