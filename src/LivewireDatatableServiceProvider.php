<?php

namespace BabakHakimi\LivewireDatatableMetronic;

use Illuminate\Support\ServiceProvider as Provider;

final class LivewireDatatableServiceProvider extends Provider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //Load the views
        $this->loadViewsFrom(__DIR__ . '/../resources/views/metronic', 'LivewireDatatableMetronic');
        //Publish views
        $this->publishes([
            __DIR__ . '/../resources/views/metronic' => resource_path('views/livewire/datatables'),
        ], 'livewire-datatable-metronic');

        //Load language translations...
        $this->loadTranslationsFrom(resource_path('lang'), 'LivewireDatatableMetronic');
        //Publish translations
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/LivewireDatatableMetronic'),
        ], 'livewire-datatable-metronic');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        // 
    }
}
