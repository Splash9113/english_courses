<?php

namespace App\Providers;

use App\Factories\GroupFactory;
use App\Factories\NewsFactory;
use App\Factories\ScheduleFactory;
use App\Repositories\GroupRepository;
use App\Repositories\GroupRepositoryInterface;
use App\Repositories\NewsRepository;
use App\Repositories\NewsRepositoryInterface;
use App\Repositories\ScheduleRepository;
use App\Repositories\ScheduleRepositoryInterface;
use App\Services\GroupService;
use App\Services\GroupServiceInterface;
use App\Services\NewsService;
use App\Services\NewsServiceInterface;
use App\Services\ScheduleService;
use App\Services\ScheduleServiceInterface;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsServiceInterface::class, function(Container $app) {
            return new NewsService(
                $app->make(NewsRepositoryInterface::class)
            );
        });

        $this->app->bind(NewsRepositoryInterface::class, function(Container $app) {
            return new NewsRepository(
                $app->make(NewsFactory::class)
            );
        });

        $this->app->bind(GroupServiceInterface::class, function(Container $app) {
            return new GroupService(
                $app->make(GroupRepositoryInterface::class)
            );
        });

        $this->app->bind(GroupRepositoryInterface::class, function(Container $app) {
            return new GroupRepository(
                $app->make(GroupFactory::class)
            );
        });

        $this->app->bind(ScheduleServiceInterface::class, function(Container $app) {
            return new ScheduleService(
                $app->make(ScheduleRepositoryInterface::class),
                $app->make(GroupServiceInterface::class)
            );
        });

        $this->app->bind(ScheduleRepositoryInterface::class, function(Container $app) {
            return new ScheduleRepository(
                $app->make(GroupServiceInterface::class),
                $app->make(ScheduleFactory::class)
            );
        });
    }
}
