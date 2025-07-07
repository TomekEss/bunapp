<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Filament\UserManagement\Resources\RabbitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
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
                TextColumn::make('name')->label(__('Name')),

                TextColumn::make('gender')
                    ->label(__('Gender'))
                    ->icon(function ($state) {
                        if ($state->value == 1)
                        {
                            return 'fas-mars';
                        }elseif ($state->value == 2)
                        {
                            return 'fas-venus';
                        }else
                        {
                            return 'fas-x';
                        }
                    })
                    ->iconColor(function ($state) {
                        return match ($state->value) {
                            1 => 'warning',
                            2 => 'success',
                            default => 'danger',
                        };
                    })
                    ->formatStateUsing(fn ($state, $record) => __($record->gender->getLabel())),

                TextColumn::make('breed.name')->label(__('Breed'))
                    ->getStateUsing(fn ($record) => $record->breed?->name ?? 'Brak'),

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
