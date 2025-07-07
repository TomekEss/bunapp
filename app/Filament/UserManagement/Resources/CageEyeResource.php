<?php

namespace App\Filament\UserManagement\Resources;

use App\Filament\UserManagement\Resources\CageEyeResource\Pages;
use App\Models\Cage\CageEye;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CageEyeResource extends Resource
{
    protected static ?int $navigationSort = 2;
    protected static ?string $model = CageEye::class;

    protected static ?string $navigationIcon = 'fas-chalkboard';

    public static function getLabel(): string
    {
        return __('Eye');
    }

    public static function getPluralLabel(): string
    {
        return __('Eyes');
    }

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
