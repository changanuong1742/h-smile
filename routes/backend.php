

<?php

use App\Http\Controllers\Backend\AppointmentController;
use App\Http\Controllers\Backend\BlogCategoryController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\OptionController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ServiceController;
use App\Models\Patients;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\PriceListController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\PatientController;
use App\Http\Controllers\Backend\SettingController;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified']], function () {

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('admin.setting');
        Route::post('/save', [SettingController::class, 'del']);
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('/', [SlideController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.slide');
        Route::get('/json', [SlideController::class, 'json']);
        Route::post('/add', [SlideController::class, 'add']);
        Route::post('/loaddata', [SlideController::class, 'loaddata']);
        Route::post('/edit', [SlideController::class, 'edit']);
        Route::post('/del', [SlideController::class, 'del']);
    });

    Route::group(['prefix' => 'blog-category'], function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('admin.blog_category');
        Route::get('/json', [BlogCategoryController::class, 'json']);
        Route::post('/add', [BlogCategoryController::class, 'add']);
        Route::post('/loaddata', [BlogCategoryController::class, 'loaddata']);
        Route::post('/edit', [BlogCategoryController::class, 'edit']);
        Route::post('/del', [BlogCategoryController::class, 'del']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('admin.blog');
        Route::get('/json', [BlogController::class, 'json']);
        Route::post('/add', [BlogController::class, 'add']);
        Route::post('/loaddata', [BlogController::class, 'loaddata']);
        Route::post('/edit', [BlogController::class, 'edit']);
        Route::post('/del', [BlogController::class, 'del']);
    });

    Route::group(['prefix' => 'service'], function () {
        Route::get('/', [ServiceController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.service');
        Route::get('/json', [ServiceController::class, 'json']);
        Route::post('/add', [ServiceController::class, 'add']);
        Route::post('/loaddata', [ServiceController::class, 'loaddata']);
        Route::post('/edit', [ServiceController::class, 'edit']);
        Route::post('/del', [ServiceController::class, 'del']);

    });

    Route::group(['prefix' => 'price-list'], function () {
        Route::get('/', [PriceListController::class, 'index'])->name('admin.price_list');
        Route::get('/json', [PriceListController::class, 'json']);
        Route::post('/add', [PriceListController::class, 'add']);
        Route::post('/loaddata', [PriceListController::class, 'loaddata']);
        Route::post('/edit', [PriceListController::class, 'edit']);
        Route::post('/del', [PriceListController::class, 'del']);

    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.contact');
        Route::get('/json', [ContactController::class, 'json']);
        Route::post('/reply', [ContactController::class, 'add'])->name('admin.partner.add');
        Route::post('/loaddata', [ContactController::class, 'loaddata']);
        Route::post('/del', [ContactController::class, 'del']);
    });

    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', [PartnerController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.partner');
        Route::get('/json', [PartnerController::class, 'json']);
        Route::post('/add', [PartnerController::class, 'add'])->name('admin.partner.add');
        Route::post('/loaddata', [PartnerController::class, 'loaddata']);
        Route::post('/edit', [PartnerController::class, 'edit']);
        Route::post('/del', [PartnerController::class, 'del']);
    });

    Route::group(['prefix' => 'appointment'], function () {
        Route::get('/', [AppointmentController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.appointment');
        Route::get('/json', [AppointmentController::class, 'json']);
        Route::post('/add', [AppointmentController::class, 'add']);
        Route::post('/loaddata', [AppointmentController::class, 'loaddata']);
        Route::post('/edit', [AppointmentController::class, 'edit']);
        Route::post('/del', [AppointmentController::class, 'del']);
    });

    Route::group(['prefix' => 'patient'], function () {
        Route::get('/', [PatientController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.patient');
        Route::get('/json', [PatientController::class, 'json']);

    });

    Route::group(['prefix' => 'employee'], function () {
        Route::get('/', [EmployeeController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.employee');
        Route::get('/json', [EmployeeController::class, 'json']);
        Route::post('/add', [EmployeeController::class, 'add']);
        Route::post('/loaddata', [EmployeeController::class, 'loaddata']);
        Route::post('/edit', [EmployeeController::class, 'edit']);
        Route::post('/del', [EmployeeController::class, 'del']);
    });

    Route::group(['prefix' => 'doctor'], function () {
        Route::get('/', [DoctorController::class, 'index'])->middleware('permission:show_list_slides')->name('admin.doctor');
        Route::get('/json', [DoctorController::class, 'json']);

    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/accountsettings', [UserController::class, 'accountsettings'])->name('admin.accountsettings');
    });

})

?>
