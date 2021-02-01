<?php

namespace BradleykingDev\LaravelSmsworks\Tests;

use Orchestra\Testbench\TestCase;
use BradleykingDev\LaravelSmsworks\LaravelSmsworksServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelSmsworksServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
