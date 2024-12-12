<?php

namespace App\Filament\Resources\TimResource\Pages;

use App\Filament\Resources\TimResource;
use App\Models\tim;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditTim extends EditRecord
{
    protected static string $resource = TimResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(tim $record){
                    if($record->thumbnail){
                        Storage::disk('public')->delete($record->thumbnail);
                    }
                }
            ),
            
        ];
    }
}
