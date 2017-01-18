<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    public function index()
    {

        $tests = DB::table('test')->where(
            [
                ['gender', 'm'],
                ['type', 1],
            ]
        )->select('name')->count();

        return $tests;

    }

    public function index2()
    {

        $tests = Test::where(
            [
                ['gender', 'm'],
                ['type', 1],
            ]
        )->get();

        return $tests->toJson();
    }

    public function index3()
    {


        $tests = Test::all();

        return $tests->toJson();

    }

    public function index4()
    {

        $tests = Test::query()->get();

        return $tests->toJson();
    }

}
