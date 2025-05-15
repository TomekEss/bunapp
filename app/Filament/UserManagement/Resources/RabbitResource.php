<?php

namespace App\Filament\UserManagement\Resources;

use App\Filament\UserManagement\Resources\RabbitResource\Pages;
use App\Models\Rabbit;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class RabbitResource extends Resource
{
    protected static ?string $model = Rabbit\Rabbit::class;

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
            'index' => Pages\ListRabbits::route('/'),
            'create' => Pages\CreateRabbit::route('/create'),
            'edit' => Pages\EditRabbit::route('/{record}/edit'),
        ];
    }
}
