<?php
use App\User;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Notifiable;

Route::apiResource('/question','QuestionController');

Route::apiResource('/category','CategoryController');

Route::apiResource('/question/{question}/reply','ReplyController');

Route::post( '/like/{reply}' ,'LikeController@likeIt');
Route::delete( '/like/{reply}' ,'LikeController@unLikeIt');

Route::post( 'notifications' ,function(){
    return [
        'read' => auth()->user()->readNotifications(),
        'unread' => auth()->user()->unReadNotifications(),
    ];
});


Route::group([    
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});