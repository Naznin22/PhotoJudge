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
use App\User;

Route::get('/index2', function () {
    return view('index2');
});

Route::get('/', function () {
    return view('auth.register');
});
// Route::get('/dashboard', function () {
//     return view('photos.index');
// });
Route::get('/gotoupload', function () {
    return view('upload');
});


Route::get('/main', function () {
    return view('main');
});

Auth::routes();

Route::get('/vote',function(){
     //Selected::find(1)->notify(new selectionDone);
     // $users->notify(new selectionDone);
    $photo = Photo::find(1);
    $user->upVote($photo);
      //return view('welcome');
})->name('vote');

Route::get('/dashboard', 'photosController@index');

Route::get('/profile/{id}', 'profileController@show');
Route::get('/upvote/{id}', 'photosController@update');
Route::get('/downvote/{id}', 'photosController@downvote');
//Route::get('upload', 'photosController@store');
Route::resource('main', 'photosController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show', function () {
    return view('profile');
});
