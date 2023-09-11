<?php
namespace Tests\Unit\Controllers;

use Tests\TestCase;
use Illuminate\Http\Request;
use App\Services\NumberConverterService;
use App\Http\Controllers\NumberConverterController;
use App\Http\Requests\ConvertNumberRequest;

class NumberConverterControllerTest extends TestCase
{
    /** @var NumberConverterController */
    private $controller;

    public function setUp(): void
    {
        parent::setUp();

        $numberConverterService = $this->createMock(NumberConverterService::class);

        $this->controller = new NumberConverterController($numberConverterService);
    }

    public function testConvertActionWithValidInput()
    {
        $this->controller->numberConverter->expects($this->once())
            ->method('convertToInteger')

        $convertRequest = new ConvertNumberRequest(['input' => 'one hundred twenty-four thousand three hundred fifty']);

        $response = $this->controller->convert($convertRequest);
        print_r( $response->getContent());die;

        $this->assertEquals(124350, $response->getTargetUrl()); 
    }


    
    public function tearDown(): void
    {
        // Clean up after each test if necessary
        parent::tearDown();
    }
}
