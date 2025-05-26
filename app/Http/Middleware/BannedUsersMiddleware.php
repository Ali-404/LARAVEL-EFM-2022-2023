<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BannedUsersMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {

        $bannedUsers = ["ali@example.com"];

        if ($request->user() && in_array($request->user()->email, $bannedUsers) ){
            return response("You are banned !");
        }

        return $next($request);
    }


}
