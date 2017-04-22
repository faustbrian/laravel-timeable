<?php



declare(strict_types=1);

namespace BrianFaust\Timeable;

use BrianFaust\ServiceProvider\AbstractServiceProvider;

class TimeableServiceProvider extends AbstractServiceProvider
{
    public function boot(): void
    {
        $this->publishMigrations();
    }

    public function getPackageName(): string
    {
        return 'timeable';
    }
}
