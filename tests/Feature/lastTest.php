<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\UselessTest;

class lastTest extends TestCase
{

    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $test = factory(UselessTest::class, 3)->create();
//        $this->expectOutputString($test);
        $array = json_decode(json_encode($test[0]),true);
        $this->assertDatabaseHas('useless_tests', [
            'name' => $array['name']
        ]);

        $array1 = json_decode(json_encode($test[1]),true);
        $this->assertDatabaseHas('useless_tests', [
            'name' => $array1['name']
        ]);

        $array2 = json_decode(json_encode($test[2]),true);
        $this->assertDatabaseHas('useless_tests', [
            'name' => $array2['name']
        ]);
    }
}
