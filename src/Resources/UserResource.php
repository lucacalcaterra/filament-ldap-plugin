<?php

namespace Lucacalcaterra\FilamentLdapPlugin\Resources;

use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

use Filament\Tables;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\Pages;
use Lucacalcaterra\FilamentLdapPlugin\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Autorizzazioni';

    protected static ?string $pluralLabel = 'Utenti';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\BelongsToSelect::make('team_d')
                    ->label('Ufficio di Appartenenza')
                    ->relationship('area', 'name')
                    ->default(''),
                Forms\Components\BelongsToSelect::make('qualificaId')
                    ->relationship('qualifica', 'name')
                    ->default(''),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('username')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('qualifica.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('area.name')->label('Area')->sortable()->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->defaultSort('username')
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\RolesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
