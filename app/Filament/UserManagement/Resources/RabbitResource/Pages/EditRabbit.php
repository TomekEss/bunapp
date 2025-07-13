<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Enums\Rabbit\RabbitGenderEnum;
use App\Filament\UserManagement\Resources\RabbitResource;
use App\Models\Breed;
use App\Models\Rabbit\Rabbit;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditRabbit extends EditRecord
{
    protected static string $resource = RabbitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('edit')
                    ->tabs([

                        Tabs\Tab::make(__('General Information'))
                            ->schema([
                                TextInput::make('name')
                                    ->label(__('Name'))
                                    ->required()
                                    ->columnSpan(3),

                                DatePicker::make('birthday')
                                    ->label(__('Birthday'))
                                    ->nullable()
                                    ->columnSpan(3),

                                Select::make('breed_id')
                                    ->label(__('Breed'))
                                    ->options(function () {
                                        $breed = Breed::user()->pluck('name', 'id')->toArray();
                                        return $breed;
                                        }
                                    )
                                    ->nullable()
                                    ->columnSpan(3),

                                Select::make('gender')
                                    ->label(__('Gender'))
                                    ->options(fn () => collect(RabbitGenderEnum::cases())
                                        ->mapWithKeys(fn($case) => [$case->value => __($case->getLabel())])
                                        ->toArray()
                                    )
                                    ->nullable()
                                    ->columnSpan(3),

                                Select::make('mother_id')
                                    ->label(__('Mother'))
                                    ->options(function () {
                                        $female = Rabbit::allFemale()->withoutCurrentModel($this->record->id)->pluck('name', 'id')->toArray();
                                        return $female;
                                    })
                                    ->searchable()
                                    ->nullable()
                                    ->columnSpan(3),

                                Select::make('father_id')
                                    ->label(__('Father'))
                                    ->options(function () {
                                        $rabbit_female = Rabbit::allMale()->withoutCurrentModel($this->record->id)->pluck('name', 'id')->toArray();
                                        return $rabbit_female;
                                    })
                                    ->searchable()
                                    ->nullable()
                                    ->columnSpan(3),
                            ])->columns(6),

                        Tabs\Tab::make(__('Additional information'))
                            ->schema([
                                TextInput::make('weight')
                                    ->label(__('Weight'))
                                ])->columns(6),

                    ])->activeTab(1)->columnSpan('full')
            ]);
    }
}
