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

Route::get('/test', function () {
<<<<<<< HEAD
    return view('test');
=======
    $name = "David Robison";
    return view('test', ['name' => "david r"]);
>>>>>>> master
});

Route::get('/test2', function () {
    return view('test2');
});