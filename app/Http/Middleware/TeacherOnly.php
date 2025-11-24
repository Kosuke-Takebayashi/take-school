<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TeacherOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->role !== 'teacher') {
            abort(403, 'アクセス禁止です');
        }

        return $next($request);
    }
}
