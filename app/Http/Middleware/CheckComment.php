<?php

namespace App\Http\Middleware;

use Closure;

class CheckComment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if((strpos($request['content'], 'hate') !== false) || (strpos($request['content'], 'idiot') !== false) || (strpos($request['content'], 'stupid') !== false)){
            return redirect('forbidden-comment');
        }
        return $next($request);
    }
}
