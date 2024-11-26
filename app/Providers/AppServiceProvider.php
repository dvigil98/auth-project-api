<?php

namespace App\Providers;

use App\Interfaces\IAuthRepository;
use App\Interfaces\IAuthService;
use App\Interfaces\ICategoryRepository;
use App\Interfaces\ICategoryService;
use App\Interfaces\IProductRepository;
use App\Interfaces\IProductService;
use App\Interfaces\IRoleRepository;
use App\Interfaces\IRoleService;
use App\Interfaces\IUserRepository;
use App\Interfaces\IUserService;
use App\Repositories\AuthRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\RoleService;
use App\Services\UserService;
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
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IAuthRepository::class, AuthRepository::class);

        // Services
        $this->app->bind(ICategoryService::class, CategoryService::class);
        $this->app->bind(IProductService::class, ProductService::class);
        $this->app->bind(IRoleService::class, RoleService::class);
        $this->app->bind(IUserService::class, UserService::class);
        $this->app->bind(IAuthService::class, AuthService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
