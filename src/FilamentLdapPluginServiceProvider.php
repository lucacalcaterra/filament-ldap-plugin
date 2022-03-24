<?php

namespace Lucacalcaterra\FilamentLdapPlugin;

use Filament\PluginServiceProvider;
use Lucacalcaterra\FilamentLdapPlugin\Commands\FilamentLdapPluginCommand;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource;
use Spatie\LaravelPackageTools\Package;

class FilamentLdapPluginServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        UserResource::class,
    ];

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-ldap-plugin');
        // ->hasConfigFile()
        // ->hasViews()
        // ->hasMigration('create_filament-ldap-plugin_table')
        // ->hasCommand(FilamentLdapPluginCommand::class);
    }
}
