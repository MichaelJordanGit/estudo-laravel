<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;

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
        Model::unguard(true);
            Password::defaults(function() {
                $rules = Password::min(8);

                return $this->app->isProduction()
                    ? $rules->mixedCase()->uncompromised()
                    : $rules;
            });
    }
}
