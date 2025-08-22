<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\SupplierRecordResource\Pages\ListSupplierRecords;
use App\Filament\Resources\SupplierRecordResource\Pages\CreateSupplierRecord;
use App\Filament\Resources\SupplierRecordResource\Pages\EditSupplierRecord;
use App\Filament\Resources\SupplierRecordResource\Pages;
use App\Filament\Resources\SupplierRecordResource\RelationManagers;
use App\Models\SupplierRecord;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SupplierRecordResource extends Resource
{
    protected static ?string $model = SupplierRecord::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('razon_social'),
                FileUpload::make('giro')->openable()




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('razon_social'),
                TextColumn::make('giro'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => ListSupplierRecords::route('/'),
            'create' => CreateSupplierRecord::route('/create'),
            'edit' => EditSupplierRecord::route('/{record}/edit'),
        ];
    }
}
