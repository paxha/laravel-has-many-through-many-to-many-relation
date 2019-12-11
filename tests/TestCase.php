<?php

namespace HasManyThroughManyToMany\Tests;

use HasManyThroughManyToMany\Tests\Models\User;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->withFactories(__DIR__ . '/database/factories');

        $this->seeds();
    }

    protected function seeds()
    {
        factory(User::class, 10)->create();
    }
}
