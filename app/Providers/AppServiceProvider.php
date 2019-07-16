<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\UserAddress;
use App\Policies\UserAddressPolicy;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    protected $policies = [
        UserAddress::class => UserAddressPolicy::class,
    ];
}
