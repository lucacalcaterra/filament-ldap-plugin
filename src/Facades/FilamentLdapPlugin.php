<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucacalcaterra\FilamentLdapPlugin\FilamentLdapPlugin
 */
class FilamentLdapPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-ldap-plugin';
    }
}
