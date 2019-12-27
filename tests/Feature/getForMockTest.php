<?php

namespace Tests\Feature;

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
            $result = $mock->test('aaaa');
            $this->assertEquals($result, 'my third test');

        });
    }
}
