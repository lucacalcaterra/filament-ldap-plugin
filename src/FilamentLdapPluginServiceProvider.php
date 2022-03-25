<?php

namespace Lucacalcaterra\FilamentLdapPlugin;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Lucacalcaterra\FilamentLdapPlugin\Commands\FilamentLdapPluginCommand;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\Pages\ListUsers;

class FilamentLdapPluginServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        UserResource::class,
    ];

    protected array $pages = [
        ListUsers::class,
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-ldap-plugin')
            ->hasConfigFile()
            ->hasViews()
            //->hasMigrations(['create_filament_ldap_plugin_table', 'add_columns_to_users'])
            ->hasMigration('2022_03_25_132727_add_columns_users')
            ->hasCommand(FilamentLdapPluginCommand::class);
    }
}
