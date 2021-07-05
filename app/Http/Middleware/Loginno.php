<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class Loginno
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
        $m = "Please login first";
        $logged_id = $request->session()->get("id");
        if(empty($logged_id))
        {
            $request->session()->flash("message","<div class='alert alert-danger'>".$m."<strong></strong></div>");
            return redirect("/");
        }

        return $next($request);
    }
}
