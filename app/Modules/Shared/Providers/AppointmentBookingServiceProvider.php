<?php

namespace App\Modules\Shared\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\AppointmentBooking\Infrastructure\AppointmentRepository;
use App\Modules\AppointmentBooking\Repository\AppointmentRepositoryInterface;

class AppointmentBookingServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
          AppointmentRepositoryInterface::class,
          AppointmentRepository::class
         );

        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }

    public function boot(): void
    {
        
    }
}