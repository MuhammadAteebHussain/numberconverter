<?php

namespace Tests\Unit\Services;

use Tests\TestCase;
use App\Services\NumberConverterService;

class NumberConverterServiceTest extends TestCase
{
    /** @var NumberConverterService */
    private $numberConverter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->numberConverter = new NumberConverterService();
    }

    public function testConvertToIntegerWithValidInput()
    {
        $result = $this->numberConverter->convertToInteger('one hundred twenty-four thousand three hundred fifty');
        $this->assertSame(124350, $result);
    }

    public function testConvertToIntegerWithInvalidInput()
    {
        $result = $this->numberConverter->convertToInteger('invalid input');
        $this->assertSame('Conversion failed.', $result);
    }

    // Add more tests for other locales and edge cases as needed...

    protected function tearDown(): void
    {
        // Clean up after each test if necessary
        parent::tearDown();
    }
}
