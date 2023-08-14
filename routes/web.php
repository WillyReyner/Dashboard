<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LockScreen;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DonwloadController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\ApiFutebolController;

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
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('home',function()
    {
        return view('home');
    });
    Route::get('home',function()
    {
        return view('home');
    });
});

Auth::routes();

// ----------------------------- API ------------------------------//
Route::get('/partidas/aovivo', [ApiFutebolController::class, 'partidasAoVivo'])->name('partidas.aovivo');
Route::get('/partidas/{partida_id}', [ApiFutebolController::class, 'detalhesPartida'])->name('partidas.detalhes');
Route::get('/api-futebol/campeonatos', [ApiFutebolController::class, 'campeonatos'])->name('api-futebol.campeonatos');
Route::get('/api-futebol/campeonatos/{campeonato_id}/partidas', [ApiFutebolController::class, 'partidasPorCampeonato'])->name('api-futebol.partidas');
Route::get('/api-futebol/campeonatos/{campeonato_id}', [ApiFutebolController::class, 'campeonato'])->name('api-futebol.campeonato');
Route::get('/api-futebol/campeonatos/{campeonato_id}/tabela', [ApiFutebolController::class, 'tabela'])->name('api-futebol.tabela');
Route::get('/api-futebol/campeonatos/{campeonato_id}/artilharia', [ApiFutebolController::class, 'artilharia'])->name('api-futebol.artilharia');
Route::get('/api-futebol/campeonatos/{campeonato_id}/fases', [ApiFutebolController::class, 'fases'])->name('api-futebol.fases');
Route::get('/api-futebol/campeonatos/{campeonato_id}/fases/{fase_id}', [ApiFutebolController::class, 'fase'])->name('api-futebol.fase');
Route::get('/api-futebol/campeonatos/{campeonato_id}/rodadas', [ApiFutebolController::class, 'rodadas'])->name('api-futebol.rodadas');
Route::get('/api-futebol/campeonatos/{campeonato_id}/rodadas/{rodada}', [ApiFutebolController::class, 'rodada'])->name('api-futebol.rodada');

// ----------------------------- home dashboard ------------------------------//
Route::get('/home', [HomeController::class, 'index'])->name('home');

// ----------------------------- DataTable ------------------------------//
Route::get('/employee', [EmployeeController::class,'index'])->name('employee');

// ----------------------------- Donwload ------------------------------//
Route::get('/download', [DonwloadController::class,'indexrelatorio'])->name('donwloadindex');
Route::get('/exames', [DonwloadController::class,'examesrelatorio'])->name('examesindex');

// -----------------------------login----------------------------------------//
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// ----------------------------- lock screen --------------------------------//
Route::get('lock_screen', [LockScreen::class, 'lockScreen'])->middleware('auth')->name('lock_screen');
Route::post('unlock', [LockScreen::class, 'unlock'])->name('unlock');

// ------------------------------ register ---------------------------------//
Route::get('/user_register', [UserManagementController::class, 'user_register'])->name('user_register');
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'storeUser'])->name('storeUser');

// ----------------------------- client ----------------------------//
Route::get('/client/add/new', [ClientController::class, 'clientRegister'])->middleware('auth')->name('client/add/new');
Route::post('/client/add/save', [ClientController::class, 'addNewClientSave'])->name('client/add/save');

Route::get('/clientManagement', [ClientController::class, 'index'])->middleware('auth')->name('clientManagement');
Route::get('/view/detail/{id}', [ClientController::class, 'viewDetail'])->middleware('auth');
Route::post('/update', [ClientController::class, 'update'])->name('update');
Route::get('/delete_user/{id}', [ClientController::class, 'delete'])->middleware('auth');

// ----------------------------- forget password ----------------------------//
Route::get('/forget-password', [ForgotPasswordController::class, 'getEmail'])->name('getEmail');
Route::post('/forget-password', [ForgotPasswordController::class, 'postEmail'])->name('postEmail');

// ----------------------------- reset password -----------------------------//
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [ResetPasswordController::class, 'updatePassword']);

// ----------------------------- user profile ------------------------------//
Route::get('/profile_user', [UserManagementController::class, 'profile'])->name('profile_user');
Route::post('/profile_user/store', [UserManagementController::class, 'profileStore'])->name('profile_user/store');

// ----------------------------- user user_management -----------------------//
Route::get('/user_management', [UserManagementController::class, 'index'])->middleware('auth')->name('user_management');
Route::get('/user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('/user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('/view/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('/update', [UserManagementController::class, 'update'])->name('update');
Route::get('/delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
Route::get('/activity/log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('/activity/login/logout', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');

Route::get('change/password', [UserManagementController::class, 'changePasswordView'])->middleware('auth')->name('change/password');
Route::post('change/password/db', [UserManagementController::class, 'changePasswordDB'])->name('change/password/db');

Route::get('/consulta-cep/{cep}', [UserManagementController::class, 'consultarCepAutomatico']);

// ----------------------------- form staff ------------------------------//
Route::get('/form/staff/new', [FormController::class, 'index'])->middleware('auth')->name('form/staff/new');
Route::post('/form/save', [FormController::class, 'saveRecord'])->name('form/save');
Route::get('/form/view/detail', [FormController::class, 'viewRecord'])->middleware('auth')->name('form/view/detail');
Route::get('/form/view/detail/{id}', [FormController::class, 'viewDetail'])->middleware('auth');
Route::post('/form/view/update', [FormController::class, 'viewUpdate'])->name('form/view/update');
Route::get('/delete/{id}', [FormController::class, 'viewDelete'])->middleware('auth');
