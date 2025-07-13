<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Enums\Rabbit\RabbitGenderEnum;
use App\Filament\UserManagement\Resources\RabbitResource;
use App\Models\Breed;
use App\Models\Rabbit\Rabbit;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateRabbit extends CreateRecord
{
    protected static string $resource = RabbitResource::class;

    public string $name;
    public int $breed_id, $gender;
    public $birthdate;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('Name'))
                    ->required(),

                DatePicker::make('birthdate')
                    ->label(__('Birthday'))
                    ->nullable(),

                Select::make('breed_id')
                    ->label(__('Breed'))
                    ->options(function () {
                        $breed = Breed::user()->pluck('name', 'id')->toArray();
                        return $breed;
                    }
                    )
                    ->nullable(),

                Select::make('gender')
                    ->label(__('Gender'))
                    ->options(fn () => collect(RabbitGenderEnum::cases())
                        ->mapWithKeys(fn($case) => [$case->value => __($case->getLabel())])
                        ->toArray()
                    )
                    ->default(RabbitGenderEnum::Unknown->value)
                    ->required(),

                Select::make('mother')
                    ->label(__('Mother'))
                    ->options(function () {
                        $female = Rabbit::allFemale()->withoutCurrentModel($this->record->id)->pluck('name', 'id')->toArray();

                        return $female;
                    }),

                Select::make('father')
                    ->label(__('Father'))
                    ->options(function () {
                        $female = Rabbit::allMale()->withoutCurrentModel($this->record->id)->pluck('name', 'id')->toArray();

                        return $female;
                    }),
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
