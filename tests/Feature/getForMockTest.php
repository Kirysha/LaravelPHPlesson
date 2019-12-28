<?php

namespace Tests\Feature;

use App\Facades\TestBasicServiceFacade;
use App\Services\TestBasicService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class getForMockTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->mock(TestBasicService::class, function ($mock) {
            $mock->shouldReceive('getForMock')->once()->andReturn('my third test');
            $result = $mock->getForMock(2);
            $this->assertEquals($result, 'my third test');
        });
    }

    public function testEx()
    {
        TestBasicServiceFacade::shouldReceive('getForMock')->once()->andReturn('my third test');
        $result = TestBasicServiceFacade::getForMock(1);
        $this->assertEquals($result, 'my third test');

    }
}
