<?php

declare(strict_types=1);

namespace BladeUI\Heroicons;

use BladeUI\Icons\Factory;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;

final class BladeHeroiconsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->registerConfig();

        $this->callAfterResolving(Factory::class, function (Factory $factory, Container $container) {
            $config = $container->make('config')->get('blade-svg', []);

            $factory->add('svg', array_merge(['path' => __DIR__.'/../../../resources/assets/svg'], $config));
        });
    }

    private function registerConfig(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-svg.php', 'blade-svg');
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/svg' => public_path('vendor/blade-svg'),
            ], 'blade-svg');

            $this->publishes([
                __DIR__.'/../config/blade-svg.php' => $this->app->configPath('blade-svg.php'),
            ], 'blade-svg-config');
        }
    }
}
