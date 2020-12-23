<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        // if (auth()->user()->role_id == 3) {
        //     return redirect()->route('admin');
        // }
        // return redirect('/admin/login');
        // dd(auth()->user()->role_id != 3);
        if (auth()->user()->role_id != 3) {
            return response()->view('admin.auth.login');
        }
        return $next($request);
    }
}
