<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        // Gunakan Tailwind CSS untuk pagination
        Paginator::useTailwind();
        // Paksa semua URL menggunakan HTTPS jika tidak di localhost
        if (config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}