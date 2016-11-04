<?php

namespace BrianFaust\Tests\Timeable;

use BrianFaust\Timeable\ServiceProvider;
use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return ServiceProvider::class;
    }
}
