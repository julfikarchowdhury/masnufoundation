<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\PDFController;

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

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'AdminController@login');
    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::get('logout', 'AdminController@logout');

        //admins
        Route::get('admins/admins', 'AdminController@admins');
        Route::match(['get', 'post'], 'admins/add-edit-admin/{id?}', 'AdminController@add_edit_admin');
        Route::get('admins/delete-admin/{id}', 'AdminController@deleteAdmin');

        //collections
        Route::get('collections/collections', 'AdminController@collections');

        //donators
        Route::get('donators/monthly_donator', 'DonatorController@monthly_donator');
        Route::get('donators/yearly_donator', 'DonatorController@yearly_donator');
        Route::get('donators/all_donator', 'DonatorController@all_donator');
        Route::match(['get', 'post'], 'donators/add_donators', 'DonatorController@add_donators');
        Route::get('donators/{id}', 'DonatorController@viewDonatorDetails');
        Route::get('donators/delete-donator/{id}', 'DonatorController@deleteDonator');
        Route::get('donator-approval/{id}', 'DonatorController@approveDonator');
        //Route::get('donator-approval/{id}','UserController@register');

        //donation
        Route::get('donations/donations', [DonationController::class, 'donations']);
        Route::get('donations/general-donations', [DonationController::class, 'generalDonation']);
        Route::match(['get', 'post'], 'donations/add-edit-donations', 'DonationController@add_edit_donations');

        Route::post('donations/append-donation', [DonationController::class, 'searchNumber'])
            ->name('admin.donations.append.donation');
        Route::post('donations/donator-type', [DonationController::class, 'donatorType'])
            ->name('admin.donations.donator.type');
        Route::get('donations/{id}', [DonationController::class, 'ShowDonationDetails']);
        //donationsfilter-by-month
        Route::post('/donations/filter-by-month/general-donations', [DonationController::class, 'generalDonation']);
        Route::post('/donations/filter-by-month/donations', [DonationController::class, 'donations']);

        //expenses
        Route::get('expenses/all-expenses', 'ExpensesController@all_expenses');
        Route::get('expenses/my-expenses', 'ExpensesController@my_expenses');
        Route::match(['get', 'post'], 'expenses/add-expenses', 'ExpensesController@add_expenses');

        //members
        Route::get('new_donators', 'DonatorController@new_donator');

        //received ammounts
        Route::get('received_ammounts/received_ammounts', 'AdminController@received_ammounts');

        //fronmt page customization
        Route::get('front-page-customization/slider/slider', 'AdminController@slider');
        Route::match(['get', 'post'], 'front-page-customization/slider/add-edit-slider/{id?}', 'AdminController@add_edit_slider');
        Route::get('front-page-customization/slider/delete-slider/{id}', 'AdminController@delete_slider');
        Route::get('front-page-customization/project/project', 'ProjectController@projects');
        Route::match(['get', 'post'], 'front-page-customization/project/add-edit-projects/{id?}', 'ProjectController@add_edit_project');
    });
});

//front side
Route::get('/', [HomeController::class, 'dashboard']);
Route::get('about', [HomeController::class, 'about']);
Route::get('projects', [HomeController::class, 'projects']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('donor-life-time-member', [HomeController::class, 'DonorAndLifeTimeMemberAdd']);
Route::post('donor-life-time-member', [App\Http\Controllers\Admin\DonatorController::class, 'add_donators']);
Route::get('form-pdf-download', [PDFController::class, 'generatePDF']);

Route::post('donate', [HomeController::class, 'donate']);

//Route::match(['get','post'],'user/login',[UserController::class,'Login']);
Route::match(['get', 'post'], 'user/register', [UserController::class, 'Register'])->name('register');


Route::prefix('/user')->namespace('App\Http\Controllers\Front')->group(function () {
    Route::match(['get', 'post'], 'login', [UserController::class, 'Login']);
    Route::group(['middleware' => ['donator']], function () {
        //Route::get('dashboard','AdminController@dashboard');
        Route::get('logout', [UserController::class, 'Logout']);

        Route::get('profile/{id}', [UserController::class, 'Profile']);
        Route::get('my-donation/{id}', [UserController::class, 'MyDonation']);
        Route::get('on-going-donations', [UserController::class, 'OnGoingDonations']);
        Route::match(['get', 'post'], 'my-donation/donate/{id}', [UserController::class, 'donate']);
    });
});
