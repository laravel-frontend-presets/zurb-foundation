# Zurb Foundation Frontend Preset For Laravel Framework 5.5 and Up

Preset for Zurb Foundation 6 scaffolding on new Laravel 5.5.x project.

*Current version*: **Zurb Foundation for sites 6.4.3**

## Usage
1. Fresh install Laravel 5.5.x and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/zurb-foundation`. Laravel 5.5.x will automatically discover this package. No need to register the service provider.
3. Use `php artisan preset foundation` for basic Zurb Foundation preset. **OR** Use `php artisan preset foundation-auth` for basic preset, Auth route entry and Zurb Foundation Auth views in one go. (**NOTE**: If you run this command several times, be sure to clean up the duplicate Auth entries in `routes/web.php`)
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.

## Screenshots
![Foundation login screen](/screenshots/foundation_login_screen.jpg)
