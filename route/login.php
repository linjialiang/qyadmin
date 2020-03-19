<?php
use think\facade\Route;

Route::get('login', 'login/login');
Route::get('register', 'login/register');
Route::post('verify/login', 'login/verifylogin');
Route::post('verify/register', 'login/verifyregister');
