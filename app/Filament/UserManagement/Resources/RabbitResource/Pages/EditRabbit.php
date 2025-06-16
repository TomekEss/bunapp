<?php

namespace App\Filament\UserManagement\Resources\RabbitResource\Pages;

use App\Enums\Rabbit\RabbitGenderEnum;
use App\Filament\UserManagement\Resources\RabbitResource;
use App\Models\Breed;
use App\Models\Rabbit\Rabbit;
use Filament\Actions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
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
                TextInput::make('name')
                    ->label('Imię królika')
                    ->required(),

                DatePicker::make('birthday')
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

                Select::make('mather_id')
                    ->label('Mother')
                    ->options(function () {
                        $rabbit_female = Rabbit::whereGender(RabbitGenderEnum::Female->value)->pluck('name', 'id')->toArray();
                        return $rabbit_female;
                    })
                    ->searchable()
                    ->nullable(),

                Select::make('father_id')
                    ->label('Father')
                    ->options(function () {
                        $rabbit_female = Rabbit::whereGender(RabbitGenderEnum::Male->value)->pluck('name', 'id')->toArray();
                        return $rabbit_female;
                    })
                    ->searchable()
                    ->nullable(),
            ]);
    }
}
