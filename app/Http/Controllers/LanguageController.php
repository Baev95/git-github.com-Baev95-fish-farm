<?php
/*
namespace App\Http\Controllers;

// LanguageController.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function changeLanguage($lang)
    {
        // Сохранение выбранного языка в сессии
        session()->put('locale', $lang);

        // Возвращение на предыдущую страницу
        return redirect()->back();
    }
}
*/ ?>
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LanguageController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $language = $request->lang;
        App::setLocale($language);

        return response()->json(['success' => true], 200);
    }
}
