<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{

    public function handle(Request $request, Closure $next, string $role): Response
    {
        return response("stoped");
    }
}
