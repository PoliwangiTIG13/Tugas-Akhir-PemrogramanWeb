<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportingController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\ReportingSemhasController;
use App\Http\Controllers\ReportingSemproController;
use App\Http\Controllers\AssessmentSemhasController;
use App\Http\Controllers\AssessmentSemproController;
use App\Http\Controllers\DashboardAssessment;
use App\Http\Controllers\DashboardAssessmentController;
use App\Http\Controllers\ReportingSemhasNeverController;
use App\Http\Controllers\ReportingSemproNeverController;

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

Route::get('/', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');

Route::post('/', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');

Route::get('/home/print', [HomeController::class, 'print'])->middleware('auth');

Route::get('/laporan', [ReportingController::class, 'index'])->middleware(
    'auth'
);

Route::get('/laporan/sempro', [
    ReportingController::class,
    'sempro',
])->middleware('auth');

Route::get('/laporan/sempro/done/print', [
    ReportingController::class,
    'sempro_done_print',
])->middleware('auth');

Route::get('/laporan/sempro/never/print', [
    ReportingController::class,
    'sempro_never_print',
])->middleware('auth');

Route::get('/laporan/semhas/done/print', [
    ReportingController::class,
    'semhas_done_print',
])->middleware('auth');

Route::get('/laporan/semhas/never/print', [
    ReportingController::class,
    'semhas_never_print',
])->middleware('auth');

Route::resource(
    '/laporan/sempro/done',
    ReportingSemproController::class
)->middleware('auth');

Route::resource(
    '/laporan/sempro/never',
    ReportingSemproNeverController::class
)->middleware('auth');

Route::get('/laporan/semhas', [
    ReportingController::class,
    'semhas',
])->middleware('auth');

Route::resource(
    '/laporan/semhas/done',
    ReportingSemhasController::class
)->middleware('auth');

Route::resource(
    '/laporan/semhas/never',
    ReportingSemhasNeverController::class
)->middleware('auth');

Route::resource('penilaian', AssessmentController::class)->middleware('auth');

// Route::get('/penilaian', [
//     DashboardAssessmentController::class,
//     'index',
// ])->middleware('auth');
// Route::post('/penilaian/create', [
//     AssessmentController::class,
//     'creates',
// ])->middleware('auth');

// Route::resource(
//     '/penilaian/sempro',
//     AssessmentSemproController::class
// )->middleware('auth');

// Route::resource(
//     '/penilaian/semhas',
//     AssessmentSemhasController::class
// )->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware(
    'guest'
);

Route::post('/register', [RegisterController::class, 'form']);
