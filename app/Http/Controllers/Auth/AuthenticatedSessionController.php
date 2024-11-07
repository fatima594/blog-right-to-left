<?php



namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

//
//namespace App\Http\Controllers\Auth;
//
//use App\Http\Controllers\Controller;
//use App\Http\Requests\Auth\LoginRequest;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Http\JsonResponse;
//
//class AuthenticatedSessionController extends Controller
//{
//    // هذه الدالة للتقديم على واجهة المستخدم وليس API
//    public function create()
//    {
//        // إذا كنت تستخدم API، يمكنك العودة برسالة أو تحويل الطلب
//        return response()->json(['message' => 'Welcome to the login page'], 200);
//    }
//
//    public function store(LoginRequest $request): JsonResponse
//    {
//        $request->authenticate();
//
//        return response()->json(['message' => 'تم تسجيل الدخول بنجاح'], 200);
//    }
//
//    public function destroy(): JsonResponse
//    {
//        Auth::logout();
//
//        return response()->json(['message' => 'تم تسجيل الخروج بنجاح'], 200);
//    }
//}

