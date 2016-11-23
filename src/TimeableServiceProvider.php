<?php

/*
 * This file is part of Laravel Timeable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
