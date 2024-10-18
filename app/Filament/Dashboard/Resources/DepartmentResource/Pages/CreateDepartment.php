<?php

namespace App\Filament\Dashboard\Resources\DepartmentResource\Pages;

use App\Filament\Dashboard\Resources\DepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDepartment extends CreateRecord
{
    protected static string $resource = DepartmentResource::class;
}
