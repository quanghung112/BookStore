<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            \App\Repositories\Interfaces\KindReporitoryInterface::class,
            \App\Repositories\Eloquent\KindEloquentRepository::class
        );
        $this->app->singleton(
            \App\Services\KindService\KindServiceInterface::class,
            \App\Services\KindService\Impl\KindServiceImpl::class
        );
        $this->app->singleton(
            \App\Repositories\Interfaces\BookRepositoryInterface::class,
            \App\Repositories\Eloquent\BookEloquentRepository::class
        );
        $this->app->singleton(
            \App\Services\BookService\BookServiceInterface::class,
            \App\Services\BookService\Impl\BookServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
