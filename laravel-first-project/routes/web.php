<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', [StudentController::class,'welcome']);
Route::get('/registerstudent', [StudentController::class,'registerStudent']);
Route::get('/students', [StudentController::class,'getStudents']);
Route::post('/createstudent', [StudentController::class,'createStudent']);
Route::get('/deletestudent/{id}', [StudentController::class,'deleteStudent']);
Route::get('/editstudent/{id}', [StudentController::class,'editStudent']);
Route::post('/editstudent/{id}', [StudentController::class,'updateStudentDetails']);




// Route::get('/signup',[StudentController::class,'signup']);

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/logout', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/test', function () {
//     return view('test');
// });
