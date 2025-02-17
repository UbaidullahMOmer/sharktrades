<?php

namespace App\Console;

use App\Console\Commands\DeactivateDeposits;
use App\Console\Commands\DeactivateQuantTradeCommand;
use App\Console\Commands\DeactivateSharkCommand;
use App\Console\Commands\PaymentLogCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        DeactivateSharkCommand::class,
        DeactivateQuantTradeCommand::class,
        PaymentLogCommand::class,
        DeactivateDeposits::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
	    $schedule->command('deactivate:quantTrade')->everyMinute();
        $schedule->command('deactivate:shark')->everyMinute();
//        $schedule->command('payment:log')->everyMinute()->withoutOverlapping();
//        $schedule->command('deactivate:deposits')->everyMinute()->withoutOverlapping();
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
