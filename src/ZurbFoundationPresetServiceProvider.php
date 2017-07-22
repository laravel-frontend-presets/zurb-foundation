<?php
namespace LaravelFrontendPresets\ZurbFoundationPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class ZurbFoundationPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('foundation', function ($command) {
            ZurbFoundationPreset::install(false);
            $command->info('Foundation scaffolding installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        PresetCommand::macro('foundation-auth', function ($command) {
            ZurbFoundationPreset::install(true);
            $command->info('Foundation scaffolding with Auth views installed successfully.');
            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });
    }
}
