<?php

namespace App\Livewire;

use Filament\Widgets\Widget;
use App\Models\Product;


class ProductPricesListWidget extends Widget
{
    protected string $view = 'livewire.product-prices-list-widget';
    public ?Product $record=null;
}
