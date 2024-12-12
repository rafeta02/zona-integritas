<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('judul')->required()->maxLength(255),
                Forms\Components\RichEditor::make('news')->required(),                
                
                Forms\Components\TextInput::make('penulis')->required()->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')->required()->image()->disk('public'),
                Forms\Components\DatePicker::make('tanggal')    ->required(),
                Forms\Components\select::make('id_categories')->label('Pilih Kategori')
                ->options([
                    1 => 'Manajemen Perubahan',
                    2 => 'Penataan Tatalaksana',
                    3 => 'Penataan MSDM',
                    4 => 'Penguatan Akuntabilitas',
                    5 => 'Penguatan Pengawasan',
                    6 => 'Peningkatan Pelayanan Publik',
                ])
                ])
            ]);
                //
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail')->searchable(),
                Tables\Columns\TextColumn::make('tanggal') ->searchable(),
                
            
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->after(function(Collection 
                    $records){
                        foreach($records as $key => $value){
                            if($value->thumbnail){Storage::disk('public')->delete($value->thumbnail);}
                        }
                    }
                ),
            ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
