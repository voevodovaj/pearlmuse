<?php

namespace App\Livewire;

use Filament\Widgets\Widget;
use App\Models\Product;

class ProductPricesWidget extends Widget
{
    protected string $view = 'livewire.product-prices-widget';
    public ?Product $record=null;
}

