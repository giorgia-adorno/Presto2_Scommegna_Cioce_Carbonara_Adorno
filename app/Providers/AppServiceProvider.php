<?php

namespace App\Providers;

use App\Models\Category;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   public function register(): void
{
    $this->app->singleton(
        LoginResponseContract::class,
        LoginResponse::class
    );
}

    public function boot(): void
    {

        Paginator::useBootstrapFive();

        if (Schema::hasTable('categories')) {
            View::share('categories', Category::orderBy('name')->get());
        }
    }
}
