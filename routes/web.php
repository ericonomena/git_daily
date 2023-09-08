<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mp\CpController;
use App\Http\Controllers\cp\ProjectsController;
use App\Http\Controllers\cp\EmailController;
use App\Http\Controllers\cp\TeamProjectsController;
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

// Route::get('/', function () {return view('user.index');});

// Route::get('/test', function () {return view('user.index');});
Route::get('/calender', function () {return view('user.calender');});

// login
Route::get('/',[LoginController::class,'home']);
Route::get('/login', function () {return view('login');});
Route::post('/connect',[LoginController::class,'connect']);
Route::get('/logout',[LoginController::class,'disconnect']);

// Register routes
Route::get('/register',[RegisterController::class,'registerPage']);
Route::post('/register/insert',[RegisterController::class,'userInsert']);


// Project CP routes
Route::get('/projectList',[ProjectsController::class,'projectsList']);
Route::view('/projectNew','cp.projectNew',['error'=>'']);
Route::post('/project/insert',[ProjectsController::class,'projectsInsert']);
Route::get('/searchproject', [ProjectsController::class, 'search']);
Route::post('/Project/delete', [ProjectsController::class, 'deleteProject']);

// Leader MP routes
Route::get('/LeaderProjectNew',[CpController::class,'simpleUserList']);
Route::get('/LeaderProjectList',[CpController::class,'leaderProjectList']);
Route::get('/searchleaderproject', [CpController::class, 'search']);
Route::get('/searchsimpleuser', [CpController::class, 'searchSimpleUser']);
Route::post('/LeaderProject/insert',[CpController::class,'leaderProjectInsert']);

// Email routes
Route::get('/send-email', [EmailController::class, 'test']);
Route::get('/emailCompose',[EmailController::class,'emailCompose']);
Route::get('/emailSetupList',[EmailController::class,'emailSetupList']);


// Team project routes
Route::get('/TeamProjectList',[TeamProjectsController::class,'teamProjectsList']);
Route::get('/TeamProjectListNew',[TeamProjectsController::class,'teamProjectListNew']);
Route::get('/TeamProject/insertOne',[TeamProjectsController::class,'teamProjectInsertOne']);
Route::get('/TeamProject/deleteOne',[TeamProjectsController::class,'teamProjectDeleteOne']);
