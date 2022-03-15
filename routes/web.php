<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Kafedras;
use App\Http\Livewire\Admin\Teachers\Teachers;
use App\Http\Livewire\Admin\Fans\Fans;
use App\Http\Livewire\Admin\Guruhs\Guruhs;
use App\Http\Livewire\Admin\Studyyear\Studyyear;
use App\Http\Livewire\Admin\Semestrs\Semestrs;
use App\Http\Livewire\Admin\Comples\Comples;
use App\Http\Livewire\User\Kurs;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\DB;
use App\Http\Livewire\User\Quiz\Quiz;
use App\Http\Livewire\User\Questions\Questions;
use App\Http\Livewire\Admin\Mavzus\Mavzus;
use App\Http\Livewire\User\Mavzus\Mavzus as Usermavzus;
use App\Http\Livewire\User\Joriynazorats\Joriynazorats;
use App\Http\Livewire\User\Jnjurnals\Jnjurnals;
use App\Http\Livewire\Admin\Oraliqnazorats\Oraliqnazorats;
use Illuminate\Support\Facades\Notification;
use App\Http\Livewire\Admin\Ongenerate\Ongenerate;
use App\Http\Livewire\User\Onjurnals\Onjurnals;
use App\Http\Livewire\Admin\Showonmarks\Showonmarks;
use App\Http\Livewire\Admin\Showjnmarks\Showjnmarks;
use App\Http\Livewire\Admin\Showallons\Showallons;
use App\Http\Livewire\User\Showallmarks\Showallmarks;
use App\Http\Livewire\Admin\Yakuniynazorats\Yakuniynazorats;
use App\Http\Livewire\User\Ynjurnals\Ynjurnals;
use App\Http\Controllers\StudentController;
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
Route::middleware(['middleware'=>'PreventBackHistory'])->group(function(){
    Auth::routes();
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
    Route::get('/kafedras',Kafedras::class);
    Route::get('/kafedras',Kafedras::class);
    Route::get('/teachers',Teachers::class);
    Route::get('/fans',Fans::class);
    Route::get('/groups',Guruhs::class);
    Route::get('/students',\App\Http\Livewire\Admin\Student\Student::class);
    Route::get('/studyyear',Studyyear::class);
    Route::get('/semestrs',Semestrs::class);
    Route::get('/comples',Comples::class);
    Route::get('/mavzus',Mavzus::class);
    Route::get('/oraliqnazorats',Oraliqnazorats::class);
    Route::get('/ongenerate',Ongenerate::class);
    Route::get('/showonmarks',Showonmarks::class);
    Route::get('/showjnmarks',Showjnmarks::class);
    Route::get('/showallons',Showallons::class);
    Route::get('/createyakuniy',Yakuniynazorats::class);


});
Route::group(['prefix'=>'users','middleware'=>['isUser','auth','PreventBackHistory']],function (){
    Route::get('dashboard',[UserController::class,'index'])->name('users.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('users.profile');
    Route::get('settings',[UserController::class,'settings'])->name('users.settings');
    Route::get('/kurs',Kurs::class);
    Route::get('/quiz',Quiz::class);
    Route::get('/questions/{id}',Questions::class);
    Route::get('/mavzus',Usermavzus::class);
    Route::get('/joriynazorat',Joriynazorats::class);
    Route::get('/jnjurnal',Jnjurnals::class);
    Route::get('/useronjnjurnal',Onjurnals::class);
    Route::get('/showallmarks',Showallmarks::class);
    Route::get('/ynjurnals',Ynjurnals::class);

});

Route::group(['prefix'=>'student','middleware'=>['isStudent','auth','PreventBackHistory']],function (){
   Route::get('dashboard',[StudentController::class,'index'])->name('student.dashboard');
});


Route::get('/chart',function (){
   $users = \App\Models\User::select(DB::raw("COUNT(*) as count"))->whereYear('created_at',date('Y'))->groupBy(DB::raw('Month(created_at)'))->pluck('count');
   $month = \App\Models\User::select(DB::raw("Month(created_at) as month"))->whereYear('created_at',date('Y'))->groupBy(DB::raw("Month(created_at)"))->pluck('month');
   //dd(count($users));
   $datas = array(0,0,0,0,0,0,0,0);
   $username = \App\Models\User::all()->where('id','=',2)->first();
   foreach ($month as $index=>$mon)
   {
       $datas[$mon-1] = $users[$index];
   }

   return view('chart',compact(['datas','username']));});
//
//Notification::route('telegram', '637399091')
//    ->notify(new \App\Notifications\Telegram());
