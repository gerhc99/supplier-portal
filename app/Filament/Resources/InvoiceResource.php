<?php

namespace App\Filament\Resources;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use App\Filament\Resources\InvoiceResource\Pages\ListInvoices;
use App\Filament\Resources\InvoiceResource\Pages\CreateInvoice;
use App\Filament\Resources\InvoiceResource\Pages\EditInvoice;
use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SelectColumn;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('invoice_id'),
                TextInput::make('invoice_no'),
                TextInput::make('series_id'),
                DatePicker::make('invoice_date'),
                FileUpload::make('xml_path')->openable()->acceptedFileTypes(['text/xml'])->disk('public')->storeFileNamesIn('xml_path_file_names'),
                 FileUpload::make('pdf_path')->openable()->acceptedFileTypes(['application/pdf'])->storeFileNamesIn('pdf_path_file_names'),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('uuid'),
                TextColumn::make('invoice_no'),
                TextColumn::make('rfc_receptor'),
                TextColumn::make('rfc_emisor'),
                SelectColumn::make('status_sat')
                ->options([
                    'Vigente' => '<span class="text-green-500">Vigente</span>',
                    'No Encontrado' => '<span class="text-blue-600">No Encontrado</span>',
                    'published' => 'Published',
                ])->selectablePlaceholder(false)->allowOptionsHtml()


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
            'index' => ListInvoices::route('/'),
            'create' => CreateInvoice::route('/create'),
            'edit' => EditInvoice::route('/{record}/edit'),
        ];
    }
}
