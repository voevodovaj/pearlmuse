<?php

namespace App\Filament\Resources\Maintexts;

use App\Filament\Resources\Maintexts\Pages\CreateMaintext;
use App\Filament\Resources\Maintexts\Pages\EditMaintext;
use App\Filament\Resources\Maintexts\Pages\ListMaintexts;
use App\Filament\Resources\Maintexts\Schemas\MaintextForm;
use App\Filament\Resources\Maintexts\Tables\MaintextsTable;
use App\Models\Maintext;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\CodeEditor;
use Filament\Forms\Components\Toggle;

class MaintextResource extends Resource
{
    protected static ?string $model = Maintext::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    { {
            return $schema->schema([

                TextInput::make('name')->required(),
                TextInput::make('url')->required(),
                CodeEditor::make('body')->columnSpanFull(),
                Toggle::make('published')
            ]);
        }
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id'),
            TextColumn::make('name'),
            TextColumn::make('url'),
            ToggleColumn::make('published'),
            TextColumn::make('created_at'),
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
            'index' => ListMaintexts::route('/'),
            'create' => CreateMaintext::route('/create'),
            'edit' => EditMaintext::route('/{record}/edit'),
        ];
    }
}
