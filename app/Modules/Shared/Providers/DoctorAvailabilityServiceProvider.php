<?php
namespace App\Modules\Shared\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\DoctorAvailability\Gateways\DoctorAvailabilityGateway;
use App\Modules\DoctorAvailability\Gateways\DoctorAvailabilityGatewayImpl;

class DoctorAvailabilityServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        
      $this->app->bind(
        DoctorAvailabilityGateway::class,
        DoctorAvailabilityGatewayImpl::class
       );


        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
    }

    public function boot(): void
    {
        // Load module-specific configurations, migrations, or views here
    }
}