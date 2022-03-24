<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\RelationManagers\RolesRelationManager;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected static $rolesRel = RolesRelationManager::class;

    protected function afterSave(): void
    {
        $this->emit('userUpdated');
    }
}
