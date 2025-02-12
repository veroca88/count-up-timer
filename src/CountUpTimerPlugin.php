<?php

namespace Veroca88\CountUpTimer;

use Filament\Contracts\Plugin;
use Filament\Panel;

class CountUpTimerPlugin implements Plugin
{
    public function getId(): string
    {
        return 'count-up-timer';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }
}
