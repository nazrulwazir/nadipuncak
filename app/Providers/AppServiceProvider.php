<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Models\Visitor;

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
        // Set the application locale based on the session or default locale
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);

        // Share the visitor count and license folders with all views
        View::composer('*', function ($view) {
            // Get all directories within the licenses_certs folder
            $folders = File::directories(public_path('themes/img/licenses_certs'));

            // Extract folder names
            $folderNames = array_map(function ($folder) {
                return basename($folder);
            }, $folders);

            // Get the visitor count
            $visitorCount = Visitor::count();

            // Share data with all views
            $view->with('licenseFolders', $folderNames);
            $view->with('visitorCount', $visitorCount);
        });
    }
}
