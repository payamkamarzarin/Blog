<?php


use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

Route::get('blog',[HomeController::class,'blog']);
Route::get('Blog-details',[HomeController::class,'Blog_details']);

Route::prefix('auth')->group(function(){
    Route::get('login',[LoginController::class,'login'])->name('login');
    Route::post('login',[LoginController::class,'customLogin'])->name('login');

    Route::get('logout',[LogoutController::class,'logout'])->name('logout');

    Route::get('register',[RegisterController::class,'index']);
    Route::post('register',[RegisterController::class,'store'])->name('register');

    
});

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('blog/index',function(){
        
        if (Gate::allows('edit-user')) {
            dd("yes");
        }else{
            dd("no");
        }
        
        [BlogController::class,'index'];
        
    })->name('index');
    Route::get('blog/list',[BlogController::class,'list']);

    Route::get('blog/create',[BlogController::class,'create']);
    Route::post('blog/create',[BlogController::class,'store']);

    Route::get('blog/{post}/edit',[BlogController::class,'edit']);
    Route::put('blog/{post}/edit',[BlogController::class,'update']);

    Route::delete('blog/{post}',[BlogController::class,'delete']);
    
});

Route::prefix('admin')->middleware('auth')->group(function(){

    Route::get('users/list',[UserController::class,'list']);

    // Route::get('blog/create',[BlogController::class,'create']);
    // Route::post('blog/create',[BlogController::class,'store']);

    // Route::get('blog/{id}/edit',[BlogController::class,'edit']);
    // Route::put('blog/{id}/edit',[BlogController::class,'update']);

    // Route::delete('blog/{id}',[BlogController::class,'delete']);
    
});

