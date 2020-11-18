<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redis;



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

Route::get('/subscribe/{topic}', [App\Http\Controllers\SubscribeController::class, 'show']);
Route::post('/subscribe/{TOPIC}', [App\Http\Controllers\SubscribeController::class, 'create'])->name('subscribe');

/*Route::get('/subscribe/{TOPIC}', function($topic){

    Redis::psubscribe(['topic.*'], function ($message, $topic) {
    $url = 'http://localhost:8000/event';

    return redirect(url($url))->with('data', $topic);

});


}); */

//Route::get('/event', [App\Http\Controllers\SubscribeController::class, 'display']);
Route::get('publish/{topic}', function($topic){
   //echo $topic; die();
    Redis::publish($topic, json_encode(['message' => 'Hello']));

});




