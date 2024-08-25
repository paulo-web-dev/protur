<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\PerrenguesCategorias;
use App\Models\Perrengue;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
   
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $perrengueCategoria = PerrenguesCategorias::where('id', '>', 0)->with('perrengues')->get();
    View::share('perrengueCategoria', $perrengueCategoria);

    // Torna a variável global na aplicação
    app()->instance('perrengueCategoria', $perrengueCategoria);
    }
}
