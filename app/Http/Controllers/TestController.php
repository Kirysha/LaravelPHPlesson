<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestBasicService;


class TestController extends Controller
{
    private $testBasicService;
    public function __construct(TestBasicService $testBasicService)
    {
        $this->testBasicService = $testBasicService;
    }

    public function getOne() {
        return response()->json($this->testBasicService->get());
    }

    public function setOne(Request $request) {
        return response()->json($this->testBasicService->set($request));
    }
    //
}
