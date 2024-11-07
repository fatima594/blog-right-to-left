<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
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
        // إذا كانت هناك قيمة lang في استعلام URL
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            App::setLocale($locale);
            Session::put('locale', $locale); // حفظ اللغة في الجلسة
        } else {
            // استرجاع اللغة المحفوظة في الجلسة (إذا كانت موجودة)
            $locale = Session::get('locale', config('app.locale'));
            App::setLocale($locale);
        }

        return $next($request);
    }
}

