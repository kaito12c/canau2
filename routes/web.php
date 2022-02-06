<?php


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SupporterController;
use App\Http\Controllers\AdminSessionController;
use App\Http\Controllers\SessionCommentsController;
use GuzzleHttp\Middleware;

Route::get('/student', function () {
    return view('student.welcome');
});

// //top page
// Route::get('/sessions', [SessionController::class, 'index'])
// ->middleware(['auth:', 'verified'])->name('sessions');

//     //サポーターの詳細
// Route::get('/sessions/{id}',[SessionController::class, 'detail'])
// ->middleware(['auth'])
// ->name('sessions.detail');

// //サポーター一覧
// Route::get('/sessions/all/sessions',[SessionController::class, 'show'])
// ->middleware(['auth'])
// ->name('sessions.all-sessions');

// // Route::get('sessions/{session:slug}', [SessionController::class, 'show']);
// // ->where('adviser', '[A-z\-]+');

// //コメントを送信する場合
// Route::post('sessions/{session:slug}/comments', [SessionCommentsController::class, 'store']);


// Route::get('reservation', 'ReservationController@create'); // 入力フォーム
// Route::post('reservation', 'ReservationController@store'); // 送信先


// Route::middleware('admin')->group(function(){
//     // Route::resource('admin/sessions', AdminSessionController::class);

//     //サポーターの情報登録
//     Route::get('admin/sessions/create',[AdminSessionController::class, 'create'])
//     ->middleware('verified')
//     ->name('admin.sessions.create');

//     Route::get('/admin/calendar', function () {
//         return view('admin.schedule.calendar');
//     });

//     //マイページ
//     //進路相談日一覧
//     Route::post('admin/sessions/',[AdminSessionController::class, 'store'])
//     ->name('admin.sessions.store');

//         //進路相談日一覧
//         Route::get('admin/sessions/',[AdminSessionController::class, 'index'])
//         ->name('admin.sessions.index');

//     // //進路相談日削除
//     // Route::delete('admin/sessions/{session}',[AdminSessionController::class, 'destroy']) //->middleware('admin');
//     // ->middleware('admin')
//     // ->name('admin.sessions.destroy');

//     //プロフィール
 


//     //サポーターの情報編集
//     Route::get('admin/sessions/{session}/edit',[AdminSessionController::class, 'edit'])
//     ->name('admin.sessions.edit');

//     //サポーターの情報更新
//     Route::patch('admin/sessions/{session}',[AdminSessionController::class, 'update'])
//     ->name('admin.sessions.update');

//     //サポーターの情報削除
//     Route::delete('admin/sessions/{session}',[AdminSessionController::class, 'destroy'])
//     ->name('admin.sessions.destroy');

//     //サポーター一覧
//     Route::post('sessions/all-supporters',[SupporterController::class, 'index']);





// });

// //下記からZoom接続について

// require __DIR__ . '/auth.php';

// Route::get('/event', function () {
//     return view("event");
// })->middleware(['auth'])->name('event');

// Route::get("/zoom", [ZoomController::class, "index"])
//     ->middleware(["auth"])->name("zoom");

// Route::get("/zoom/auth", [ApiController::class, "oauth_success"])
//     ->middleware(['auth']);

// Route::post("/make_meeting", [ApiController::class, "make_meeting"])
//     ->middleware(['auth']);
// // Route::group(['middleware' => 'auth'], function ($router) {
// //     Route::get('admin', 'AdminController@index')->name('amdin');
//     // Route::get('admin/user', 'ZoomApiController@me');


//     // Route::get('zoomoatuh/check', 'AdminController@zoomOauth')->name('zoomOauth');
//     // Route::get('zoomoatuh/getoauth', 'AdminController@getOauth')->name('getOauth');
// // });
