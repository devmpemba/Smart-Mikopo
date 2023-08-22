<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Validator;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    protected $namespace = 'App\Http\Controllers';


    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });

        Route::bind('member', function ($value) {
            return \App\Models\Members::findOrFail(decrypt($value));
        });

        Route::bind('group', function ($value) {
            return \App\Models\Groups::findOrFail(decrypt($value));
        });

        Validator::extend('valid_interest_rate', function ($attribute, $value, $parameters, $validator) {
           
            return is_numeric($value) && $value >= 0; // Modify this condition based on your requirements
        });
    
        Validator::extend('valid_penalty_rate', function ($attribute, $value, $parameters, $validator) {
        
            return is_numeric($value) && $value >= 0; // Modify this condition based on your requirements
        });


        parent::boot();
    }
}
