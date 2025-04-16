<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $staff = session('staff');
        if ($staff && $staff['role'] == $role) {
            return $next($request);
        }

        return redirect('/staff/dashboard')->withErrors(['access_denied' => 'Anda tidak memiliki akses ke halaman ini']);
    }
}
