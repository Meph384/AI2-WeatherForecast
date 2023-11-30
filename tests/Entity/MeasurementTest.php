<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['99.7', 211.46],
            ['-151.9', -241.42],
            ['-1.9', 28.58],
            ['-5.3', 22.46],
            ['-68.5', -91.3],
            ['-193.8', -316.84],
            ['42.3', 108.14],
            ['86.3', 187.34],
            ['14.6', 58.28],
            ['-85.2', -121.36],
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();

        $measurement->setCelsius($celsius);
        $this->assertEquals(
            $expectedFahrenheit,
            $measurement->getFahrehneit(),
            "Expected $expectedFahrenheit Fahrenheit for $celsius Celsius, got {$measurement->getFahrehneit()}"
        );
    }
}
