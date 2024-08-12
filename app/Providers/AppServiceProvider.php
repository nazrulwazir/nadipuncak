<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        View::composer('*', function ($view) {
            // Get all directories within the licenses_certs folder
            $folders = File::directories(public_path('themes/img/licenses_certs'));

            // Extract folder names
            $folderNames = array_map(function ($folder) {
                return basename($folder);
            }, $folders);

            // Share folder names with all views
            $view->with('licenseFolders', $folderNames);
        });
    }
}
