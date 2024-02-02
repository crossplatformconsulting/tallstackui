<?php

namespace TallStackUi;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use TallStackUi\Facades\TallStackUi as Facade;
use TallStackUi\Foundation\Console\InstallIconCommand;
use TallStackUi\Foundation\Personalization\PersonalizationResources;
use TallStackUi\Foundation\Support\Blade\BladeComponentPrefix;
use TallStackUi\Foundation\Support\Blade\BladeDirectives;

class TallStackUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerConfig();

        $this->registerCommands();

        $this->registerComponents();

        $this->registerComponentPersonalizations();

        BladeDirectives::register();
    }

    public function register(): void
    {
        $this->app->singleton('TallStackUi', TallStackUi::class);

        AliasLoader::getInstance()->alias('TallStackUi', Facade::class);
    }

    protected function registerCommands(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->commands(InstallIconCommand::class);
    }

    protected function registerComponentPersonalizations(): void
    {
        foreach (tallstackui_components_soft_personalized() as $key => $component) {
            $this->app->singleton($key, fn () => new PersonalizationResources($component));
        }
    }

    protected function registerComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade): void {
            $prefix = app(BladeComponentPrefix::class);

            foreach (config('tallstackui.components') as $alias => $class) {
                $blade->component($class, $prefix($alias));
            }
        });
    }

    protected function registerConfig(): void
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'tallstack-ui');
        $this->mergeConfigFrom(__DIR__.'/config.php', 'tallstackui');
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadTranslationsFrom(__DIR__.'/lang', 'tallstack-ui');

        $this->publishes([__DIR__.'/config.php' => config_path('tallstackui.php')], 'tallstackui.config');
        $this->publishes([__DIR__.'/lang' => lang_path('vendor/tallstack-ui')], 'tallstackui.lang');
        $this->publishes([__DIR__.'/resources/views' => resource_path('views/vendor/tallstack-ui')], 'tallstackui.views');
    }
}
