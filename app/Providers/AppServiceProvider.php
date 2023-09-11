<?php

namespace App\Providers;

use App\Services\Contracts\LanguageServiceInterface;
use Illuminate\Support\ServiceProvider;
use App\Services\Contracts\NumberConverterContract;
use App\Services\NumberConverterService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NumberConverterContract::class, NumberConverterService::class);
        $this->app->bind(LanguageContract::class, NumberConverterService::class);
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
}
