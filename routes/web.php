<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('ID/{id}', function ($id) {
    echo 'ID: ' . $id;
});

Route::get('role', [
    'middleware' => 'role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('profile', [
    'middleware' => 'auth',
    'uses' => 'UserController@showPath',
]);

Route::get('/usercontroller/path', [
    'middleware' => 'first',
    'uses' => 'UserController@showPath',
]);

Route::get('/usercontroller/path', [
    'middleware' => 'second',
    'uses' => 'UserController@showPath',
]);

Route::resource('my', 'MyController');

class MyClass
{
    public $foo = 'bar';
}
Route::get('/myclass', 'ImplicitController@index');
Route::get('/foo/bar', 'UriController@index');

Route::get('/register', function () {
    return view('register');
});

Route::post('/user/register', [
    'uses' => 'UserRegistration@postRegister'
]);

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/basic_response', function () {
    return 'Hello World';
    return response($content, $status)
        ->header('Content-Type', $type)
        ->header('X-Header-One', 'Header Value')
        ->header('X-Header-Two', 'Header Value');
});

Route::get('/header', function () {
    return response("Hello", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie', function () {
    return response("Hello", 200)->header('Content-Type', 'text/html')
        ->withcookie('name', 'david d');
});

Route::get('json', function () {
    return response()->json(['name' => 'David D', 'state' => 'Idaho']);
});

Route::get('/test', ['as' => 'testing', function () {
    return view('test2');
}]);

Route::get('redirect', function () {
    return redirect()->route('testing');
});

Route::get('/test2', function () {
    return view('test2');
});

Route::get('rr', 'RedirectController@index');
Route::get('/redirectcontroller', function () {
    return redirect()->action('RedirectController@index');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('localization/{locale}', 'LocalizationController@index');

Route::get('session/get', 'SessionController@accessSessionData');
Route::get('session/set', 'SessionController@storeSessionData');
Route::get('session/remove', 'SessionController@deleteSessionData');

Route::get('/validation', 'ValidationController@showform');
Route::post('/validation', 'ValidationController@validateform');

Route::get('/uploadfile', 'UploadFileController@index');
Route::post('/uploadfile', 'UploadFileController@showUploadFile');

Route::get('sendbasicemail', 'MailController@basic_email');
Route::get('sendhtmlemail', 'MailController@html_email');
Route::get('sendattachmentemail', 'MailController@attachment_email');

Route::get('ajax', function () {
    return view('message');
});
Route::post('/getmsg', 'AjaxController@index');

Route::get('/facadeex', function () {
    return TestFacades::testingFacades();
});