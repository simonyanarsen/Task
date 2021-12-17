<?php

namespace App\Providers;

use App\Repository\Eloquent\MediaFileRepository;
use App\Repository\MediaFileRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MediaFileRepositoryInterface::class, MediaFileRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
