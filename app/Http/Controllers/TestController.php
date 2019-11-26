<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestOne {
    private $name;
    private $age;
    private $isBoy;

    public function get() {
        return ["name"=>$this->name, "age"=>$this->age, "isBoy"=>$this->isBoy]  ;
    }

}

class TestController extends Controller
{
    public function getOne() {
    $test = new TestOne();
    return $test->get();
    }
    //
}
