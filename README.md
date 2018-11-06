# Zurb Foundation Frontend Preset For Laravel Framework 5.5 and Up

Zurb Foundation Frontend Preset For Laravel Framework 5.5 and Up

*Current version*: **Zurb Foundation for sites 6.5.0**

## Usage
1. Fresh install Laravel 5.5 (and up) and `cd` to your app.
2. Install this preset via `composer require laravel-frontend-presets/zurb-foundation`. No need to register the service provider. Laravel 5.5 & up can auto detect the package.
3. Use `php artisan preset foundation` for basic Zurb Foundation preset. **OR** Use `php artisan preset foundation-auth` for basic preset, Auth route entry and Zurb Foundation Auth views in one go.
4. `npm install`
5. `npm run dev`
6. Configure your favorite database (mysql, sqlite etc.)
7. `php artisan migrate` to create basic user tables.
8. `php artisan serve` (or equivalent) to run server and test preset.

## Screenshots
![Foundation login screen](/screenshots/foundation_login_screen.jpg)
