<?php

namespace App\Filament\UserManagement\Resources;

use App\Filament\UserManagement\Resources\CageEyeResource\Pages;
use App\Filament\UserManagement\Resources\CageEyeResource\RelationManagers;
use App\Models\Cage\CageEye;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CageEyeResource extends Resource
{
    protected static ?string $model = CageEye::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCageEyes::route('/'),
            'create' => Pages\CreateCageEye::route('/create'),
            'edit' => Pages\EditCageEye::route('/{record}/edit'),
        ];
    }
}
