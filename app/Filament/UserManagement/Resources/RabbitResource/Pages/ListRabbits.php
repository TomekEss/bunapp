<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Filament\UserManagement\Resources\RabbitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListRabbits extends ListRecords
{
    protected static string $resource = RabbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Imię'),

                TextColumn::make('gender')
                    ->label('Płeć')
                    ->formatStateUsing(fn ($state, $record) => $record->gender->getLabel()),

                TextColumn::make('breed.name')
                    ->label('Rasa'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }
}
