<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class Strtask extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'strtask {userstr}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'String task';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->argument('userstr')) {
            $this->info(app()->make('StringTask')->makeStrUpper($this->argument('userstr')));
            $this->info(app()->make('StringTask')->alternateCase($this->argument('userstr')));
            $this->info(app()->make('StringTask')->makeCSV($this->argument('userstr')));
        } else {
            $this->danger('String empty or invalid');
        }
    }

    /**
     * Define the command's schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
