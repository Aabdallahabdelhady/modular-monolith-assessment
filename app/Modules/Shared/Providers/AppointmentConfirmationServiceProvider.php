<?php
namespace App\Modules\Shared\Providers;

use App\Modules\AppointmentConfirmation\Gateways\AppointmentConfirmationGatewayImpl;
use AppointmentConfirmationGateway;
use Illuminate\Support\ServiceProvider;

class AppointmentConfirmationServiceProvider extends ServiceProvider
{
    public function register(): void
    {
          $this->app->bind(
            AppointmentConfirmationGateway::class,
            AppointmentConfirmationGatewayImpl::class
          );

    }

    public function boot(): void
    {
        // Load module-specific configurations, migrations, or views here
    }
}