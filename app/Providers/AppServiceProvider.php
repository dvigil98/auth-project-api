<?php

namespace App\Providers;

use App\Interfaces\ICategoryRepository;
use App\Interfaces\ICategoryService;
use App\Interfaces\IProductRepository;
use App\Interfaces\IProductService;
use App\Interfaces\IRoleRepository;
use App\Interfaces\IRoleService;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\RoleRepository;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\RoleService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Repositories
        $this->app->bind(ICategoryRepository::class, CategoryRepository::class);
        $this->app->bind(IProductRepository::class, ProductRepository::class);
        $this->app->bind(IRoleRepository::class, RoleRepository::class);

        // Services
        $this->app->bind(ICategoryService::class, CategoryService::class);
        $this->app->bind(IProductService::class, ProductService::class);
        $this->app->bind(IRoleService::class, RoleService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
