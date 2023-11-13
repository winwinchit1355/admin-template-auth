<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class CustomAuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        // Define your custom can method
        $gate->define('custom_can', function ($user, $ability) {
            // Add your logic to check if the user has the specified permission
            return $user->permissions()->where('title', $ability)->exists();
        });

        // Register a custom Blade directive
        Blade::directive('customCan', function ($permission) {
            return "<?php if (\Illuminate\Support\Facades\Gate::check('custom_can', {$permission})): ?>";
        });

        Blade::directive('endCustomCan', function () {
            return "<?php endif; ?>";
        });
    }
}
