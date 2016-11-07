<?php

namespace BrianFaust\Timeable;

use BrianFaust\ServiceProvider\ServiceProvider;

class TimeableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishMigrations();
    }

    public function getPackageName()
    {
        return 'timeable';
    }
}
