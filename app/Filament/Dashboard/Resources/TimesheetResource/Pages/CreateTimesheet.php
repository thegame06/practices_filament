<?php

namespace App\Filament\Dashboard\Resources\TimesheetResource\Pages;

use App\Filament\Dashboard\Resources\TimesheetResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTimesheet extends CreateRecord
{
    protected static string $resource = TimesheetResource::class;
}
