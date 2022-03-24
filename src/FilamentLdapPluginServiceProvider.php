<?php

namespace Lucacalcaterra\FilamentLdapPlugin;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Lucacalcaterra\FilamentLdapPlugin\Commands\FilamentLdapPluginCommand;

class FilamentLdapPluginServiceProvider extends PackageServiceProvider
{
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
            ->hasMigration('create_filament-ldap-plugin_table')
            ->hasCommand(FilamentLdapPluginCommand::class);
    }
}