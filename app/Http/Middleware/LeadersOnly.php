<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LeadersOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (! auth()->user()->hasMembers) {
            return response()->json([
               "error" => 1,
               "msg" => "Access Denied"
            ]);
        }
        return $next($request);
    }
}
