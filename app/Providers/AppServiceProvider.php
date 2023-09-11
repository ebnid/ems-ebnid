<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\LeaveObserver;
use App\Observers\UserObserver;
use App\Observers\WithdrawObserver;
use App\Models\Withdraw;
use App\Models\Leave;
use App\Models\User;


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
        Leave::observe(LeaveObserver::class);
        Withdraw::observe(WithdrawObserver::class);
    }
}
