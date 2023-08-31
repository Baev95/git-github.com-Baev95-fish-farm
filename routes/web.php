<?php

// use App\Services\Localozation\LocalizationService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LocalizationControler;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\MainController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Localization Route

Route::get("locale/{lung}", [LocalizationControler::class, "setLang"]);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.index');
});

//Route::get('/locale/{locale}', 'App\Http\Controllers\LocalizationControler@setLang')->name('setLang');
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('page/{slug}', [PageController::class, "show"]);

Route::fallback(function () {
    abort(404, "Oops, Page not found <b>404</b>");
});

// Route::group(
//     [
//         'prefix' => LocalizationService::locale(),
//         'middleware' => 'setLocale'
//     ],

//     function () {
//         $locale = request()->segment(1, '');
//         var_dump($locale);

        /*  Route::get('/localization/{language}', function ($language) {
            App::setLocale($language);
            return view('localization');
        });*/

        // 

        // Route::resource('posts', 'App\Http\Controllers\PostController');
        /*Route::fallback(function () {
            abort(404, "Oops, Page not found 404");
        });
//     }
// );












// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     echo '<h1>Hello, world!</h1>';
// });
/*
Route::get('/', function () {
    $far = 'ЗДРАВСТВУЙТЕ, А К ВАМ МОЖНО!?!';
    //return view('home');
    //return view('home')->with('far', $far);
    //return view('home', ['far' => $far]);
    return view('home', compact('far'));
});
*/
// Route::get('/about', function () {
//     echo '<h1>О НАС</h1>';
// });

// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::post('/send-form', function () {
//     if (!empty($_POST)) {
//         var_dump($_POST);
//     };
//     return 'send-form';
// });
// Route::match(['post', 'get'], '/contact', function () {
//     if (!empty($_POST)) {
//         dump($_POST);
//     };
//     return view('contact');
// });


// Route::match(['post', 'get'], '/contact2', function () {
//     if (!empty($_POST)) {
//         dump($_POST);
//     };
//     return view('contact');
// })->name('contact');



// Route::group(
//     [
//         'prefix' => LocalizationService::locale(),
//     ],
//     function () {
//         Route::get('/', function () {
//             view('home');
//         });
//         /*Route::get('/', 'indexController@index')->name('home');
//         Route::get('/page/{id}', 'PageController@show')->name('page.show');*/
//     }
// );

/*
ОСНОВА
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('page/{slug}', 'App\Http\Controllers\PageController@show');
Route::fallback(function () {
    abort(404, "Oops, Page not found <b>404</b>");
});
Route::resource('posts', 'App\Http\Controllers\PostController');
*/


// Route::get('locale/{locale}', 'App\Http\Controllers\HomeController@changeLocale')->name('locale');

// Route::group(
//     [
//         'prefix' => LocalizationService::locale(),
//         'middleware' => 'setLocale'
//     ],

//     function () {
//         $locale = request()->segment(1, '');
//         var_dump($locale);

        /*  Route::get('/localization/{language}', function ($language) {
            App::setLocale($language);
            return view('localization');
        });*/

        // Route::get('', 'App\Http\Controllers\HomeController@index');
        // Route::get('/page/{slug}', 'App\Http\Controllers\PageController@show');

        // Route::resource('posts', 'App\Http\Controllers\PostController');
        /*Route::fallback(function () {
            abort(404, "Oops, Page not found 404");
        });*/
//     }
// );


// Route::group(['prefix' => "{lang}"], function () {
//     Route::get('/', 'HomeController@index');
// });
