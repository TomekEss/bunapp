<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Enums\Rabbit\RabbitGenderEnum;
use App\Filament\UserManagement\Resources\RabbitResource;
use App\Models\Breed;
use Filament\Actions;
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
                    ->label('Imię królika')
                    ->required(),

                DatePicker::make('birthdate')
                    ->label('Data urodzenia')
                    ->nullable(),

                Select::make('breed_id')
                    ->label('Rasa')
                    ->options(function () {
                        $breed = Breed::user()->pluck('name', 'id')->toArray();
                        return $breed;
                    }
                    )
                    ->nullable(),

                Select::make('gender')
                    ->label('Płeć')
                    ->options(fn () => collect(RabbitGenderEnum::cases())
                        ->mapWithKeys(fn($case) => [$case->value => $case->getLabel()])
                        ->toArray()
                    )
                    ->nullable(),
            ]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
