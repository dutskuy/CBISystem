<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Gunakan Tailwind CSS untuk pagination
        Paginator::useTailwind();
        if(env(‘APP_ENV’) == ‘production’){
        URL::forceScheme(‘https’);
        }
    }
}