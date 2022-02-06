<?php


use App\Mail\MailTest;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\SessionCommentsController;
use App\Http\Controllers\Student\Auth\NewPasswordController;

//登録＿ログイン関連
use App\Http\Controllers\Student\Auth\VerifyEmailController;
use App\Http\Controllers\Student\StudentSessionController;
use App\Http\Controllers\Student\StudentProfileController;
use App\Http\Controllers\Student\Auth\RegisteredUserController;
use App\Http\Controllers\Student\Auth\PasswordResetLinkController;
use App\Http\Controllers\Student\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Student\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Student\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Student\Auth\EmailVerificationNotificationController;


Route::get('/', function () {
    return view('student.welcome');
});

//top page(StudentSessionController)
Route::get('/sessions', [StudentSessionController::class, 'index'])
->middleware(['auth:students', 'verified'])->name('student.sessions');

    //サポーターの詳細
Route::get('/sessions/{id}',[StudentSessionController::class, 'detail'])
->middleware(['auth:students'])
->name('sessions.detail');

//サポーター一覧
Route::get('/sessions/all/sessions',[StudentSessionController::class, 'show'])
->middleware(['auth'])
->name('sessions.all-sessions');

// Route::get('sessions/{session:slug}', [SessionController::class, 'show']);
// ->where('adviser', '[A-z\-]+');

//コメントを送信する場合
Route::post('sessions/{session:slug}/comments', [SessionCommentsController::class, 'store']);


// Route::get('reservation', 'ReservationController@create'); // 入力フォーム
// Route::post('reservation', 'ReservationController@store'); // 送信先


//プロフィール(StudentSessionController)
Route::middleware('admin:students')->group(function(){
    // Route::resource('admin/sessions', AdminSessionController::class);

    //サポーターの情報登録
    Route::get('admin/sessions/create',[StudentProfileController::class, 'create'])
    ->middleware('verified')
    ->name('admin.sessions.create');

    // Route::get('/admin/calendar', function () {
    //     return view('admin.schedule.calendar');
    // });

    //マイページ
    //進路相談日一覧
    Route::post('admin/sessions/',[StudentProfileController::class, 'store'])
    ->name('sessions.store');

        //進路相談日一覧
        Route::get('admin/sessions/',[StudentProfileController::class, 'index'])
        ->name('sessions.index');

    // //進路相談日削除
    // Route::delete('admin/sessions/{session}',[AdminSessionController::class, 'destroy']) //->middleware('admin');
    // ->middleware('admin')
    // ->name('admin.sessions.destroy');

    //プロフィール
 


    //サポーターの情報編集
    Route::get('/sessions/{session}/edit',[StudentProfileController::class, 'edit'])
    ->name('sessions.edit');

    //サポーターの情報更新
    Route::patch('/sessions/{session}',[StudentProfileController::class, 'update'])
    ->name('sessions.update');

    //サポーターの情報削除
    Route::delete('admin/sessions/{session}',[StudentProfileController::class, 'destroy'])
    ->name('sessions.destroy');

    //サポーター一覧
    // Route::post('sessions/all-supporters',[SupporterController::class, 'index']);





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

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->middleware('auth:students')
                ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['auth:students', 'signed', 'throttle:6,1'])
                ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware(['auth:students', 'throttle:6,1'])
                ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->middleware('auth:students')
                ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
                ->middleware('auth:students');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
                ->middleware('auth:students')
                ->name('logout');

// Route::get('/supporter', [SupporterController::class, 'index'])
//                 ->middleware('auth')
//                 ->name('supporter');

                