<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request\
     * @param  string $role
     * @return mixed
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {

        // if ($request->user()->role != 'super_admin') {
        //     return redirect('/');
        // }elseif ($request->user()->role != 'pejabat_prodi') {
        //     return redirect('/');
        // }elseif ($request->user()->role != 'staf_prodi') {
        //     return redirect('/');
        // }elseif ($request->user()->role != 'dosen') {
        //     return redirect('/');
        // }elseif ($request->user()->role != 'mahasiswa') {
        //     return redirect('/');
        // }

        if ($role == 'super_admin' && auth()->user()->role_id != 1) {
            return redirect('/');
        }elseif ($role == 'dosen' && auth()->user()->role_id != 4) {
            return redirect('/');
        }elseif ($role == 'mahasiswa' && auth()->user()->role_id != 5) {
            return redirect('/');
        }

        return $next($request);
    }
}

