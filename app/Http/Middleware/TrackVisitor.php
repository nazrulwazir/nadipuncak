<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitor
{
    public function handle($request, Closure $next)
    {
        $ip = $request->header('X-Forwarded-For') ?? $request->ip();
        $visitor = Visitor::where('ip_address', $ip)->whereDate('created_at', now())->first();
        
        if (!$visitor) {
            Visitor::create(['ip_address' => $ip]);
        }

        return $next($request);
    }
}
