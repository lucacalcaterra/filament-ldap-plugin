<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\Pages;

use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
}
