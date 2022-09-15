<?php

use App\Models\Answer;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function (User $user) {
    
    $user = User::take(15)->get();
    return view('splash', [
        'users' => $user
    ]);
});

Route::get('{user:username}', function(User $user) {
    
    
    return view('profile', [
        'user' => $user,
        
    ]);
});

Route::get('/register', function () {
    
    return view('register');
});


// Route::get('{username}', function($username) {

//     $user = User::where('username', $username )->first();
//     return view('profile', [
//         'user' => $user,
        
//     ]);
// });