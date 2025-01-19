<?php
namespace App\Modules\Shared\Providers;

use App\Modules\DoctorAppointmentManagement\Adapters\AppointmentRepositoryAdapter;
use App\Modules\DoctorAppointmentManagement\Ports\AppointmentRepositoryPort;
use Illuminate\Support\ServiceProvider;

class DoctorAppointmentManagementServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
        $this->app->bind(
          AppointmentRepositoryPort::class,
          AppointmentRepositoryAdapter::class
         );

       
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }

    public function boot(): void
    {
        // Load module-specific configurations, migrations, or views here
    }
}