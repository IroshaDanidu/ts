<?php

namespace App\Nova;

use App\Models\Variant;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Boolean;

use Laravel\Nova\Fields\BelongsTo;

class VariantResource extends Resource
{
    public static $model = Variant::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            BelongsTo::make('Product', 'product', ProductResource::class)
                ->sortable()
                ->rules('required'),
            Text::make('SKU', 'sku')
                ->sortable()
                ->rules('required', 'max:255'),
            Number::make('Selling Price', 'selling_price')
                ->sortable()
                ->rules('required', 'numeric'),
            Number::make('MRP', 'mrp')
                ->sortable()
                ->rules('required', 'numeric'),
            Number::make('Stock', 'stock')
                ->sortable()
                ->rules('required', 'integer'),
            Number::make('Quantity', 'quantity')
                ->sortable()
                ->rules('required', 'integer'),
            Number::make('Sort Order', 'sort_order')
                ->sortable()
                ->rules('required', 'integer'),
            Boolean::make('Ads', 'ads')
                ->sortable(),
            Boolean::make('Popular', 'popular')
                ->sortable(),
            Boolean::make('Best Selling', 'best_selling')
                ->sortable(),
            Boolean::make('Trending', 'trending')
                ->sortable(),
            Boolean::make('Featured', 'featured')
                ->sortable(),
            Boolean::make('Special Offer', 'special_offer')
                ->sortable(),
            Boolean::make('Best Seller', 'best_seller')
                ->sortable(),
        ];
    }

    public function cards(Request $request): array
    {
        return [];
    }

    public function filters(Request $request): array
    {
        return [];
    }

    public function lenses(Request $request): array
    {
        return [];
    }

    public function actions(Request $request): array
    {
        return [];
    }
}
