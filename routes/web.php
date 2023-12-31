<?php

use Illuminate\Support\Facades\Route;

use App\Models\Task;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        return redirect('/app');
    // return view('welcome');
});

Route::get('/app', function () {
    $data = task::all();
    return view('app', ['data' => $data]);
});

Route::post('/app', function () {
    $newItem = new Task();

    $newItem ->task = request('task');

       $newItem->save();

       return redirect('/app');
}); 

Route::get('/about', function () {
    
    return view('about');
});
