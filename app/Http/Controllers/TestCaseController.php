<?php

namespace App\Http\Controllers;

use App\TestCase;
use Illuminate\Http\Request;

class TestCaseController extends Controller
{
    public function getTestCases()
    {
        $testCases= TestCase::all();
        return view('shop.index',['testCaseData' => $testCases]);

    }




}
