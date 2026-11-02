<?php

namespace App\Filament\Resources\Products;

use App\Filament\Resources\Products\Pages\CreateProduct;
use App\Filament\Resources\Products\Pages\EditProduct;
use App\Filament\Resources\Products\Pages\ListProducts;
use App\Filament\Resources\Products\Schemas\ProductForm;
use App\Filament\Resources\Products\Tables\ProductsTable;
use App\Models\Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use App\Models\Catalog;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {

    $catalogs=Catalog::query()->orderBy('name')->pluck('name', 'id')->toArray();

        return $schema->schema([

TextInput::make('name'),
TextInput::make('price')->numeric()->step(0.01)->label('Price, $'),
TextInput::make('status')->required(),
FileUpload::make('picture'),
Textarea::make('small_description')->columnSpanFull(),
RichEditor::make('description')->columnSpanFull(),
Select::make('catalog_id')->label('Каталог')
    ->options([
      $catalogs
    ])->required(),

        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
ImageColumn::make('picture'), 
TextColumn::make('name'),
TextColumn::make('price'),
TextColumn::make('status'),


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
            'index' => ListProducts::route('/'),
            'create' => CreateProduct::route('/create'),
            'edit' => EditProduct::route('/{record}/edit'),
        ];
    }
}
