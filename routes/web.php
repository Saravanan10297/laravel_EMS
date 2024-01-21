<?php

use App\Http\Controllers\Employeedetails;
use App\Http\Controllers\Log;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

// Route::get('/test', function () {
//     return config('app.env');
// });

// Route::get('/about-us',function() {
//     return redirect()->route('saro');
// });

// //parameter getting function
// Route::group(['prefix' => 'admin'],function(){
//     Route::get('/user/{id}',function($id){
//         return 'User ID is <b>'.$id.'</b>';
//     });
    
//     Route::get('/setting',function(){
//          return 'settings';
//     });
// });


// Route::get('/user1/saravanan-learn-laravel',function(){
//      return 'this is a wonderfull year 2024';
// })->name('saro');
Route::get('/reg',[Log::class,'Register'])->name('employee.Register');
Route::get('/AAA',[Employeedetails::class,'Index'])->name('employee.index');
Route::get('/employees/create',[Employeedetails::class,'create'])->name('employee.create');
Route::post('/employees/stored',[Employeedetails::class,'store'])->name('employee.store');
Route::get('/employees/show/{id}',[Employeedetails::class,'show'])->name('employee.show');
Route::get('/employees/{id}/Edit',[Employeedetails::class,'edit'])->name('employee.edit');
Route::put('/employees/{id}',[Employeedetails::class,'update'])->name('employee.update');
Route::delete('/employees/{id}',[Employeedetails::class,'destroy'])->name('employee.destroy');

 
