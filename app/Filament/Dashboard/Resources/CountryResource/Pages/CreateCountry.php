<?php

namespace App\Filament\Dashboard\Resources\CountryResource\Pages;

use App\Filament\Dashboard\Resources\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;
}
