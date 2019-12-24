<?php

namespace App\Http\Controllers;

use App\Facades\TestBasicServiceFacade;
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
    //
}
