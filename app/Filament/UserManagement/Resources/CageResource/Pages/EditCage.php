<?php

namespace App\Filament\UserManagement\Resources\CageResource\Pages;

use App\Filament\UserManagement\Resources\CageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCage extends EditRecord
{
    protected static string $resource = CageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
