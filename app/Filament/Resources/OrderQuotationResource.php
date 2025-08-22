<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\OrderQuotationResource\Pages\ListOrderQuotations;
use App\Filament\Resources\OrderQuotationResource\Pages\CreateOrderQuotation;
use App\Filament\Resources\OrderQuotationResource\Pages\EditOrderQuotation;
use App\Filament\Resources\OrderQuotationResource\Pages;
use App\Filament\Resources\OrderQuotationResource\RelationManagers;
use App\Models\OrderQuotation;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderQuotationResource extends Resource
{
    protected static ?string $model = OrderQuotation::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('quotation_no'),
                TextInput::make('customer_quo_no'),
                DatePicker::make('date_entered'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('quotation_no'),
                TextColumn::make('date_entered'),
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
            'index' => ListOrderQuotations::route('/'),
            'create' => CreateOrderQuotation::route('/create'),
            'edit' => EditOrderQuotation::route('/{record}/edit'),
        ];
    }
}
