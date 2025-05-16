<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Filament\UserManagement\Resources\RabbitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;


class EditRabbit extends EditRecord
{
    protected static string $resource = RabbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
