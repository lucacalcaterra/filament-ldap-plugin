<?php

namespace Lucacalcaterra\FilamentLdapPlugin;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource;
use Lucacalcaterra\FilamentLdapPlugin\Commands\FilamentLdapPluginCommand;

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
