<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('index');
});



Route::get("/login",[LoginController::class,"index"])->name("Login");
Route::post("/log",[LoginController::class,"login"])->name("On-Login");


Route::get("/register",[RegisterController::class,"index"])->name("Register");
Route::post("/register/store",[RegisterController::class,"store"]);


Route::post("/logout",[LogoutController::class,"logout"])->name("Logout");

Route::get("/dashboard",[DashboardController::class,"index"])->name("Dashboard");

Route::get("/user/profile",[ProfileController::class,"index"])->name("Profile");
Route::post("/user/profile/store",[ProfileController::class,"updateProfile"])->name("On-Update");

// Admin
Route::middleware('admin')->group(function(){
    Route::get("/admin/index",[AdminController::class,"index"])->name("Admin");
    Route::get('/admin/course', [AdminController::class, 'course'])->name('course');
    Route::get('/admin/type', [AdminController::class, 'courseType'])->name('courseType');
    Route::get('/admin/selection', [AdminController::class, 'courseSelection'])->name('courseSelection');
    Route::get('/admin/course/update{id}', [AdminController::class, 'displayCourse'])->name('displayCourse');
    Route::post('/admin/course/update',[AdminController::class,'updateCourse'])->name('updateCourse');

    Route::get('/admin/course/delete{id}', [AdminController::class, 'delete'])->name('deleteCourse');
});





