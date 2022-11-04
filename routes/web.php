<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Admin\DonationController;

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

// Route::get('/', function () {
//     return view('front.dashboard');
// });

//Route::get('/auth/login', function () {
 //   return view('auth.login');
//});

//Route::get('contact', [DonationController::class, 'search_number']);

Route::get('/admin/register', function () {
    return view('auth.register');
});

Route::get('admin/about', function () {
    return view('front.about');
});
Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
     Route::match(['get','post'],'login','AdminController@login');
     Route::group(['middleware'=>['admin']],function(){
         Route::get('dashboard','AdminController@dashboard');
     
    //     // Route::get('update-password','AdminController@updatePassword');
    //     // Route::post('update-admin-password','AdminController@updateAdminPassword');
    //     Route::match(['get','post'],'update-admin-password','AdminController@updateAdminPassword');
    //     Route::match(['get','post'],'update-admin-details','AdminController@updateAdminDetails');
    //     Route::match(['get','post'],'update-vendor-details/{slug}','AdminController@updateVendorDetails');
    //     Route::get('admins/{title?}','AdminController@admin');
    //     Route::get('view-vendor-details/{id}','AdminController@viewVendorDetails');

        Route::get('logout','AdminController@logout');

        //dashboard
        //Route::get('dashboard','AdminController@dashboard');

        //admins
        Route::get('admins/admins','AdminController@admins');
        //Route::get('admins/add_admins','AdminController@view_admins');
        //Route::post('add_admins','AdminController@add_admins');

        Route::match(['get','post'],'admins/add-edit-admin/{id?}', 'AdminController@add_edit_admin');
        Route::get('admins/delete-admin/{id}','AdminController@deleteAdmin');

        //collections
        Route::get('collections/collections','AdminController@collections');

        //donators
        Route::get('donators/monthly_donator','DonatorController@monthly_donator');
        Route::get('donators/yearly_donator','DonatorController@yearly_donator');
        Route::get('donators/all_donator','DonatorController@all_donator');
        Route::match(['get','post'],'donators/add_donators','DonatorController@add_donators');
        Route::get('donators/{id}','DonatorController@viewDonatorDetails');


        //donations
        Route::get('donations/donations','DonationController@donations');
        Route::match(['get','post'],'donations/add-edit-donations','DonationController@add_edit_donations');

        Route::post('donations/append-donation', [DonationController::class, 'searchNumber'])
            ->name('admin.donations.append.donation');
            
        //expenses
        Route::get('expenses/all-expenses','ExpensesController@all_expenses');
        Route::get('expenses/my-expenses','ExpensesController@my_expenses');
        Route::match(['get','post'],'expenses/add-expenses','ExpensesController@add_expenses');

        //members
        Route::get('members/new_members','AdminController@new_members');

        //received ammounts
        Route::get('received_ammounts/received_ammounts','AdminController@received_ammounts');


        //fronmt page customization
        Route::get('front-page-customization/slider/slider','AdminController@slider');
        Route::match(['get','post'],'front-page-customization/slider/add-edit-slider/{id?}','AdminController@add_edit_slider');
        Route::get('front-page-customization/slider/delete-slider/{id}','AdminController@delete_slider');
        Route::get('front-page-customization/project/project','ProjectController@projects');
        Route::match(['get','post'],'front-page-customization/project/add-edit-projects/{id?}','ProjectController@add_edit_project');

        
    });
});

//front side

Route::get('/', [HomeController::class, 'dashboard']);
Route::get('about', [HomeController::class, 'about']);
Route::get('projects', [HomeController::class, 'projects']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('contact', [HomeController::class, 'contact']);
//Route::get('/', [HomeController::class, 'dashboard']);

