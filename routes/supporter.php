<?php

use App\Mail\MailTest;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\SessionCommentsController;
use App\Http\Controllers\Supporter\Auth\NewPasswordController;

//登録＿ログイン関連
use App\Http\Controllers\Supporter\Auth\VerifyEmailController;
use App\Http\Controllers\Supporter\SupporterProfileController;
use App\Http\Controllers\Supporter\SupporterSessionController;
use App\Http\Controllers\Supporter\Auth\RegisteredUserController;
use App\Http\Controllers\Supporter\Auth\PasswordResetLinkController;
use App\Http\Controllers\Supporter\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Supporter\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Supporter\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Supporter\Auth\EmailVerificationNotificationController;


Route::get('/', function () {
    return view('supporter.welcome');
});

//top page(SupporterSessionController)
Route::get('/sessions', [SupporterSessionController::class, 'index'])
->middleware(['auth:supporters']) //, 'verified'
->name('sessions');

//サポーターの詳細
Route::get('sessions/{id}',[SupporterSessionController::class, 'detail'])
->middleware(['auth:supporters'])
->name('profile.detail');

//サポーター一覧
Route::get('/sessions/all/sessions',[SupporterSessionController::class, 'show'])
->middleware(['auth:supporters'])
->name('all-sessions');

// Route::get('sessions/{session:slug}', [SessionController::class, 'show']);
// ->where('adviser', '[A-z\-]+');

//コメントを送信する場合
Route::post('sessions/{session:slug}/comments', [SessionCommentsController::class, 'store']);


// Route::get('reservation', 'ReservationController@create'); // 入力フォーム
// Route::post('reservation', 'ReservationController@store'); // 送信先


//サポーター登録(SupporterProfileController)
Route::middleware('auth:supporters')->group(function(){
    // Route::resource('admin/sessions', AdminSessionController::class);

    //サポーターの情報登録
    Route::get('/profile/create',[SupporterProfileController::class, 'create'])
    // ->middleware('verified')
    ->name('profile.create');

    // Route::get('/supporter/calendar', function () {
    //     return view('supporter.schedule.calendar');
    // });

    //マイページ
    //進路相談日一覧
    Route::post('/profile/create',[SupporterProfileController::class, 'store'])
    ->name('profile.store');

    //進路相談日一覧
    Route::get('profile.index');

 
    //サポーターの情報編集
    Route::get('profile/{id}/edit',[SupporterProfileController::class, 'edit'])
    ->name('profile.edit');

    //サポーターの情報更新
    Route::patch('profile/{id}',[SupporterProfileController::class, 'update'])
    ->name('profile.update');

    //サポーターの情報削除
    Route::delete('profile/{id}',[SupporterProfileController::class, 'destroy'])
    ->name('profile.destroy');




});

//下記からZoom接続について
Route::get('/event', function () {
    return view("event");
})->middleware(['auth'])->name('event');

Route::get("/zoom", [ZoomController::class, "index"])
    ->middleware(["auth"])->name("zoom");

Route::get("/zoom/auth", [ApiController::class, "oauth_success"])
    ->middleware(['auth']);

Route::post("/make_meeting", [ApiController::class, "make_meeting"])
    ->middleware(['auth']);
// Route::group(['middleware' => 'auth'], function ($router) {
//     Route::get('admin', 'AdminController@index')->name('amdin');
    // Route::get('admin/user', 'ZoomApiController@me');


    // Route::get('zoomoatuh/check', 'AdminController@zoomOauth')->name('zoomOauth');
    // Route::get('zoomoatuh/getoauth', 'AdminController@getOauth')->name('getOauth');
// });


Route::get('/register', [RegisteredUserController::class, 'create'])
                ->middleware('guest')
                ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
                ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->middleware('guest')
                ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->middleware('guest')
                ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->middleware('guest')
                ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
                ->middleware('guest')
                ->name('password.update');

// Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
//                 ->middleware('auth:supporters')
//                 ->name('verification.notice');

// Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
//                 ->middleware(['auth:supporters', 'signed', 'throttle:6,1'])
//                 ->name('verification.verify');

// Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
//                 ->middleware(['auth:supporters', 'throttle:6,1'])
//                 ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth:supporters')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth:supporters');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:supporters')
                ->name('logout');

// Route::get('/supporter', [SupporterController::class, 'index'])
//                 ->middleware('auth')
//                 ->name('supporter');

                