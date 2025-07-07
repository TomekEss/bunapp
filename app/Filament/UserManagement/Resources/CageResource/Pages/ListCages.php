<?php

namespace App\Filament\UserManagement\Resources\CageResource\Pages;

use App\Filament\UserManagement\Resources\CageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListCages extends ListRecords
{
    protected static string $resource = CageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function table(Table $table): Table
    {
        return $table->columns($this->getTableColumns())->actions([EditAction::make()]);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('id'),
            TextColumn::make('name'),
        ];
    }
}
