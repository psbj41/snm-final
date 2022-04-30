<?php

use App\Http\Controllers\Backend\Admin\PermissionController;
use App\Http\Controllers\Backend\Admin\RoleController;
use App\Http\Controllers\Backend\Admin\UserController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DutyController;
use App\Http\Controllers\Backend\NotificationController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\SpecialController;
use Illuminate\Support\Facades\Route;

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

Route::get('password/change',[UserController::class,'pageReset'])->name('password.change');
Route::post('password/change',[UserController::class,'pageResetStore'])->name('password.change.store');
Route::get('/reload-captcha', [UserController::class, 'reloadCaptcha']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home',[UserController::class,'home'])->name('dashboard');
    //user
    Route::resource('user', UserController::class);
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');

    //role
    Route::resource('role', RoleController::class);
    Route::get('/role/{role}/assign-permission',[RoleController::class,'assignPermissionView'])->name('assign.permission');
    Route::post('/role/{role}/assign-permission',[RoleController::class,'assignPermission'])->name('assign.permission.store');

    //permission
    Route::resource('permission', PermissionController::class);

    //Pages
    Route::controller(PageController::class)->group(function () {
        Route::get('uploads-page', 'uploadPage')->name('upload.page');

        //thoughts
        Route::get('uploads-page/thought', 'uploadThoughtPage')->name('thought.upload.page');
        Route::post('uploads-page/thought', 'uploadThoughtStore')->name('thought.upload.store');
        Route::get('uploads-page/thought/data', 'thoughtDataPage')->name('thought.data.page');

        //Bhawans
        Route::get('uploads-page/bhawan', 'uploadBhawanPage')->name('bhawan.upload.page');
        Route::post('uploads-page/bhawan', 'uploadBhawanStore')->name('bhawan.upload.store');
        Route::get('uploads-page/bhawan/data', 'bhawanDataPage')->name('bhawan.data.page');
        Route::get('uploads-page/bhawan/data2', 'bhawanDataPage2')->name('bhawan.data.page2');
        Route::get('sangat/today', 'bhawanDataPageToday')->name('bhawan.data.today.page');
        Route::get('satsang-details','getSatsangDetails')->name('all.satsang.details');


        //Admin
        Route::get('uploads-page/admin', 'uploadAdminPage')->name('admin.upload.page');
        Route::post('uploads-page/admin', 'uploadAdminStore')->name('admin.upload.store');
        Route::get('uploads-page/admin/data', 'adminDataPage')->name('admin.data.page');


        //Administration
        Route::get('administration', 'administrationPage')->name('administration.page');
        Route::get('administration/pracharak', 'administrationpracharakPage')->name('administration.pracharak.page');
        Route::get('administration/pracharika', 'administrationpracharikaPage')->name('administration.pracharika.page');
        Route::get('administration/sanyojak', 'administrationsanyojakPage')->name('administration.sanyojak.page');
        Route::get('administration/gyan-pracharak', 'administrationgyanPage')->name('administration.gyan.page');
        Route::get('administration/department', 'administrationdepartmentPage')->name('administration.department.page');

        //Duty
        Route::get('uploads-page/duty', 'uploadDutyPage')->name('duty.upload.page');
        Route::post('uploads-page/duty', 'uploadDutyStore')->name('duty.upload.store');
        Route::get('uploads-page/duty/data', 'dutyDataPage')->name('duty.data.page');
        Route::get('uploads-page/duty/data2', 'dutyDataPage2')->name('duty.data.page2');
        Route::get('uploads-page/duty/own/data2', 'dutyDataPageMy')->name('duty.data.my.page');
        Route::get('uploads-page/duty/gs/data2', 'dutyDataPageGs')->name('duty.data.gs.page');
        Route::get('uploads-page/duty/ns/data2', 'dutyDataPageNs')->name('duty.data.ns.page');



    });

    Route::controller(DutyController::class)->group(function () {
        Route::get('duty/general','all')->name('all.duty');
        Route::get('duty/nari','nari')->name('nari.duty');
        Route::get('duty/pracharak','pracharakDuty')->name('pracharak.duty');
        Route::get('duty/pracharika','pracharikaDuty')->name('pracharika.duty');
        Route::get('duty/mukhi/general','mukhiGeneral')->name('mukhi.general.duty');
        Route::get('duty/mukhi/nari','mukhiNari')->name('mukhi.nari.duty');
        Route::get('duty/sanyojak/general','sanyojakGeneral')->name('sanyojak.general.duty');
        Route::get('duty/sanyojak/nari','sanyojakNari')->name('sanyojak.nari.duty');
    });

    Route::controller(NotificationController::class)->group(function () {
        Route::get('notification/sangat','sangat')->name('sangat.notification');
        Route::get('notification/pracharak','pracharak')->name('pracharak.notification');
        Route::get('notification/gyanpracharak','gyanPracharak')->name('gyanpracharak.notification');
        Route::get('notification/mukhi','mukhi')->name('mukhi.notification');
        Route::get('notification/sanyojak','sanyojak')->name('sanyojak.notification');
        Route::get('notification/sewadal-sanchalak','sewadal')->name('sewadal.notification');
        Route::get('notification/kshetriya-sanchalak','kshetriya')->name('kshetriya.notification');
    });

    //Special
    Route::resource('special', SpecialController::class);

    //Department
    Route::resource('department', DepartmentController::class);

    //Contact Us
    Route::get('/contact-us', function () {
        return view('backend.pages.contact_us');
    })->name('contact');

    Route::get('/suppot-team', function () {
        return view('backend.pages.support');
    })->name('support');


});
