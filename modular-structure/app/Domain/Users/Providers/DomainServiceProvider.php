<?php

namespace App\Domain\Users\Providers;

use App\Domain\Users\Database\Factories\AuthorizedDeviceFactory;
use App\Domain\Users\Database\Factories\LoginHistoryFactory;
use App\Domain\Users\Database\Factories\UserFactory;
use App\Domain\Users\Entities\AuthorizedDevice;
use App\Domain\Users\Entities\LoginHistory;
use App\Domain\Users\Entities\Permission;
use App\Domain\Users\Entities\Role;
use App\Domain\Users\Entities\User;
use App\Domain\Users\Policies\AuthorizedDevicePolicy;
use App\Domain\Users\Policies\LoginHistoryPolicy;
use App\Domain\Users\Policies\PermissionPolicy;
use App\Domain\Users\Policies\RolePolicy;
use App\Domain\Users\Policies\UserPolicy;
use App\Infrastructure\Abstracts\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    protected $alias = 'users';

    protected $hasMigrations = true;

    protected $hasTranslations = true;

    protected $hasFactories = true;

    protected $hasPolicies = true;

    protected $providers = [
        RouteServiceProvider::class,
        RepositoryServiceProvider::class,
        EventServiceProvider::class,
        BroadcastServiceProvider::class,
    ];

    protected $policies = [
        AuthorizedDevice::class => AuthorizedDevicePolicy::class,
        LoginHistory::class     => LoginHistoryPolicy::class,
        Permission::class       => PermissionPolicy::class,
        Role::class             => RolePolicy::class,
        User::class             => UserPolicy::class,
    ];

    protected $factories = [
        AuthorizedDeviceFactory::class,
        LoginHistoryFactory::class,
        UserFactory::class,
    ];
}
