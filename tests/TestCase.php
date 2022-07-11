<?php

declare(strict_types=1);

namespace Dinhdjj\CardChargingV2\Tests;

use Dinhdjj\CardChargingV2\CardChargingV2ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Dinhdjj\\CardChargingV2\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_card_charging_v2_table.php.stub';
        $migration->up();
    }

    protected function getPackageProviders($app)
    {
        return [
            CardChargingV2ServiceProvider::class,
        ];
    }
}
