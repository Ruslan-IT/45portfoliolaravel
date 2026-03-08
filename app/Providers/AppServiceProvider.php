<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer(
            [
                'partials.header',
                'partials.header',
                'partials.megaMenu',
                'pages.index',
                'pages.index',
            ],
            function ($view) {

                $categories = Category::with('children')
                    ->whereNull('parent_id')
                    ->get();


                $view->with([
                    'categories'   => $categories,
                ]);
            }
        );
    }
}
