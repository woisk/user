<?php
/**
 * Created by PhpStorm.
 * AuthUser: woisk
 * Date: 2017/11/27 0027
 * Time: 22:04
 */


Route::prefix('user')
    ->middleware('api')
    ->middleware('Woisk\User\Http\Middleware\AuthUser')
    ->namespace("Woisk\User\Http\Controllers")
    ->group(function () {


    Route::any('info', "InfoController@create")->name('user.info');

    Route::any('isp/belier','BelierController@create')->name('user.isp.belier');
    Route::any('isp/nation','BelierController@create')->name('user.isp.nation');






});