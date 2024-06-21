<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Laravel\Passport\Passport;
use App\Models\Passport\Client;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment() !== 'local') {
            URL::forceScheme('https');
        }
        Passport::useClientModel(Client::class);
        //
    }
}
