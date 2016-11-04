<?php

namespace BrianFaust\Timeable;

class ServiceProvider extends \BrianFaust\ServiceProvider\ServiceProvider
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
