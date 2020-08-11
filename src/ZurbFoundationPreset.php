<?php

namespace LaravelFrontendPresets\ZurbFoundationPreset;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class ZurbFoundationPreset extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install($withAuth = false)
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();

        if($withAuth)
        {
            static::addAuthTemplates();
        }
        else
        {
            static::updateWelcomePage();
        }

        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            'foundation-sites' => '^6.5',
            'jquery' => '^3.2',
        ] + Arr::except($packages, [
            'bootstrap',
            'bootstrap-sass',
            'bulma',
            'uikit'
        ]);
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        // clean up orphan files
        $orphan_sass_files = glob(resource_path('/sass/*.*'));

        foreach($orphan_sass_files as $sass_file)
        {
            (new Filesystem)->delete($sass_file);
        }

        copy(__DIR__.'/foundation-stubs/_settings.scss', resource_path('sass/_settings.scss'));
        copy(__DIR__.'/foundation-stubs/foundation.scss', resource_path('sass/foundation.scss'));
        copy(__DIR__.'/foundation-stubs/app.scss', resource_path('sass/app.scss'));
    }

    /**
     * Update the bootstrapping files.
     *
     * @return void
     */
    protected static function updateBootstrapping()
    {
        (new Filesystem)->delete(
            resource_path('js/bootstrap.js')
        );

        copy(__DIR__.'/foundation-stubs/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    /**
     * Update the default welcome page file with Foundation buttons.
     *
     * @return void
     */
    protected static function updateWelcomePage()
    {
        // remove default welcome page
        (new Filesystem)->delete(
            resource_path('views/welcome.blade.php')
        );

        // copy new one with Zurb Foundation buttons
        copy(__DIR__.'/foundation-stubs/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    /**
     * Copy Zurb Foundation Auth view templates.
     *
     * @return void
     */
    protected static function addAuthTemplates()
    {
        // Add Home controller
        copy(__DIR__.'/foundation-stubs/Controllers/HomeController.php', app_path('Http/Controllers/HomeController.php'));

        // Add Auth route in 'routes/web.php'
        $auth_route_entry = "Auth::routes();\n\nRoute::get('/home', 'HomeController@index')->name('home');\n\n";
        file_put_contents('./routes/web.php', $auth_route_entry, FILE_APPEND);

        // Copy Zurb Foundation Auth view templates
        (new Filesystem)->copyDirectory(__DIR__.'/foundation-stubs/views', resource_path('views'));
    }
}
