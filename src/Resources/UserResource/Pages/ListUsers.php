<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;
}
