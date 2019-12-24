<?php


namespace App\Services;

class TestOne {
    private $name;
    private $age;
    private $isBoy;


    public function get() {
        return ["name"=>"string", "age"=>"integer", "isBoy"=>"boolean"]  ;
    }

    public function set($name, $age, $isBoy) {
        $this->name = $name;
        $this->age = $age;
        $this->isBoy = $isBoy;
        return ["name"=>$this->name, "age"=>$this->age, "isBoy"=>$this->isBoy]  ;
    }
}



class TestBasicService
{
    private $test;
    public function __construct(TestOne $test)
    {
        $this->test = $test;
    }

    /**
     * @return array
     */
    public function get(){
        return $this->test->get();
    }

    /**
     * @param $request
     * @return array
     */
    public function set($request){
    return $this->test->set($request->get("name"),$request->get("age"),$request->get("isBoy"));
    }
}
