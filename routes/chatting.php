<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function(){

    Route::controller(ChatController::class)->group(function(){

        Route::get('/chat', 'index')->name('chat.index');

    });

    Route::controller(MessageController::class)->group(function(){

        Route::get('/message', 'index')->name('message.index');
        Route::get('/message/show', 'show')->name('message.show');
        Route::post('/message/store', 'store')->name('message.store');

    });

});
