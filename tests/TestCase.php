<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Clockwork\Support\Laravel\Tests\UsesClockwork;
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase, UsesClockwork;

    protected function setUp() :void
    {
       parent::setUp();
       $this->setUpClockwork();
    }
}
