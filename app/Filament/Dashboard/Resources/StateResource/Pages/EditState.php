<?php

namespace App\Filament\Dashboard\Resources\StateResource\Pages;

use App\Filament\Dashboard\Resources\StateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditState extends EditRecord
{
    protected static string $resource = StateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
