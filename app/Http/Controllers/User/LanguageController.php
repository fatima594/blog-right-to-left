<?php

// LanguageController.php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $lang = $request->input('lang');
        if (in_array($lang, ['en', 'ar'])) {
            app()->setLocale($lang);
            session()->put('locale', $lang); // حفظ اللغة في الجلسة
        }
        return redirect()->back();
    }
    public function setLanguage(Request $request)
    {
        $request->session()->put('locale', $request->lang);
        return redirect()->back();
    }


}
