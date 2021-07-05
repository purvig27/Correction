<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class Loginyes
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
        $logged_id = $request->session()->get("id");
        if(!empty($logged_id))
        {
            return redirect("dashboard");
        }
        return $next($request);
    }
}
