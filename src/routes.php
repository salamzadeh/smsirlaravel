<?php

use Salamzadeh\Sms\Controllers\SmsirlaravelController;

Route::group(['namespace'=>'Salamzadeh\Sms\Controllers','middleware'=>config('smsirlaravel.middlewares')], function (){
	Route::get(config('smsirlaravel.route'),[SmsirlaravelController::class, 'index'])->name('sms-admin');
	Route::get('sms-admin/{log}/delete','SmsirlaravelController@delete')->name('deleteLog');
});
