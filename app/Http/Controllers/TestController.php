<?php

namespace App\Http\Controllers;

use App\Facades\TestBasicServiceFacade;
use App\Test;
use Illuminate\Http\Request;
use App\Services\TestBasicService;


class TestController extends Controller
{
//    private $testBasicService;
//    public function __construct(TestBasicService $testBasicService)
//    {
//        $this->testBasicService = $testBasicService;
//    }

    public function getOne() {
        return response()->json(TestBasicServiceFacade::get());
    }

    public function setOne(Request $request) {
        return response()->json(TestBasicServiceFacade::set($request));
    }

    public function getEx(Request $request) {
        return response()->json(TestBasicServiceFacade::getException($request->get('id')));
    }

    public function getTest(Request $request)
    {
        $id = $request ->get('id');
        $test = new Test();
        $res = $test ->t2($id);
        return response()->json($res);
    }

    public function getTestTest(Request $request)
    {
        $text = $request ->get('text');
        $test = new Test();
        $res = $test ->t3($text);
        return response()->json($res);
    }


    //
}
