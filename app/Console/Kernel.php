<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 *
	 */
	protected $commands = [
		Commands\GetData::class
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */


	protected function schedule(Schedule $schedule)
	{
		$schedule->command('get:data')->dailyAt('5:00'); // Diariamente às 5 da manhã

	}

	/**
	 * Register the commands for the application.
	 *
	 * @return void
	 */
	protected function commands()
	{
		$this->load(__DIR__ . '/Commands');

		require base_path('routes/console.php');
	}
}
