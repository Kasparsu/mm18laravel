<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $parts = explode(',', $request->header('Accept-Language'));

        if(in_array($parts[0], ['en', 'et'])){
            Lang::setLocale($parts[0]);
        }
        return $next($request);
    }
}
