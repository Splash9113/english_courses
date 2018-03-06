<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
//        dd(Redis::set('name', 'Taylor'));
//        dd(Redis::get('name'));
        dd(event(new TestEvent(['lol' => 'kek'])));
    }

    public function testRoute()
    {
        return view('lending');
    }
}
