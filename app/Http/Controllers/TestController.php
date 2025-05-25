<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TestMiddleware;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function _construct(){
        // $this->middleware("TestMiddleware:admin")->exept(["create", "store"]);
    }

    public function index(){
        return "hello world";
    }
}
