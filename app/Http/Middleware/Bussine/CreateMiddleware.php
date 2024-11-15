<?php

namespace App\Http\Middleware\Bussine;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateMiddleware
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
        if (Auth::user()->bussine_id) {
          return redirect()->route('settings.edit', [Auth::user()->bussine_id]);
        }
        return $next($request);
    }
}
