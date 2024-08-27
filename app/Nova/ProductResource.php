<?php

namespace App\Nova;

use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;



class ProductResource extends Resource
{
    public static $model = Product::class;

    public static $title = 'name';

    public static $search = [
        ''
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug', 'slug')
                ->from('name')
                ->rules('required'),

            Textarea::make('Description', 'description')
                ->rules('required'),

            BelongsTo::make('Category', 'category', CategoryResource::class)
                ->sortable()
                ->rules('required'),

            Boolean::make('Is Active', 'status')
                ->sortable(),

            HasMany::make('Variants', 'variants', VariantResource::class),

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

    public static function label(): string
    {
        return 'Product';
    }

}
