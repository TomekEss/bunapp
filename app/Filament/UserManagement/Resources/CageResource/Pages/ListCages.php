<?php

namespace App\Filament\UserManagement\Resources\CageResource\Pages;

use App\Filament\UserManagement\Resources\CageResource;
use App\Models\Cage\CageEye;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListCages extends ListRecords
{
    protected static string $resource = CageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = ['all' => Tab::make('All')->badge($this->getModel()::count())];

        $cage_eyes = CageEye::all();
        foreach ($cage_eyes as $cage_eye) {
            $cage = $cage_eye->cage;
            $slug = $cage_eye->number;

            $tabs[$slug] = Tab::make($cage)
                ->badge($cage_eye->cage)
                ->modifyQueryUsing(function ($query) use ($cage_eye) {
                    return $query->where('cage_id', $cage_eye->id);
                });
        }

        return $tabs;
    }
}
