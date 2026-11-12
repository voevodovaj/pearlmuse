<?php

namespace App\Filament\Resources\Orders;

use App\Filament\Resources\Orders\Pages\CreateOrder;
use App\Filament\Resources\Orders\Pages\EditOrder;
use App\Filament\Resources\Orders\Pages\ListOrders;
use App\Filament\Resources\Orders\Schemas\OrderForm;
use App\Filament\Resources\Orders\Tables\OrdersTable;
use App\Models\Order;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
      {
        return $schema->schema([

TextInput::make('id')->disabled(),
DateTimePicker::make('created_at')->disabled(),
TextInput::make('user_id')->disabled(),
TextInput::make('username')->disabled(),
TextInput::make('email')->disabled(),
TextInput::make('phone')->disabled(),
TextInput::make('country')->disabled(),
TextInput::make('city')->disabled(),
TextInput::make('post_code')->disabled(),
Textarea::make('address')->disabled(),
Textarea::make('data')->disabled(),
Textarea::make('data_json')->disabled(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('id'),
            TextColumn::make('created_at'),
            TextColumn::make('user_id'),
            TextColumn::make('email'),
            TextColumn::make('data'),
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
            'index' => ListOrders::route('/'),
            // 'create' => CreateOrder::route('/create'),
            'edit' => EditOrder::route('/{record}/edit'),
        ];
    }
    
}
