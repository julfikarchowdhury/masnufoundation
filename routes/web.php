<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\GalleryController;
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


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

Route::post('/send-email', function (Request $request) {
    // Retrieve form data

    // Validate the form data
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

    // Send the email
    Mail::to('infojulfikarchowdhury@gmail.com')->send(new ContactFormMail($validatedData));


    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Email sent successfully!');
})->name('send-email');

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
        //gallery
        Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
        Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
        Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');
        Route::get('/gallery/{id}', [GalleryController::class, 'show'])->name('gallery.show');
        Route::get('/gallery/{id}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
        Route::put('/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.update');
        Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    });
});

//front side
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('projects', [HomeController::class, 'projects'])->name('projects');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('donor-life-time-member', [HomeController::class, 'DonorAndLifeTimeMember'])->name('donor-life-time-member');
Route::post('donor-life-time-member', [HomeController::class, 'DonorAndLifeTimeMemberAdd'])->name('donor-life-time-member.post');
Route::get('form-pdf-download', [PDFController::class, 'generatePDF']);

Route::post('donate', [HomeController::class, 'donate']);

//Route::match(['get','post'],'user/login',[UserController::class,'Login']);
Route::match(['get', 'post'], 'user/register', [UserController::class, 'Register'])->name('register');

Route::get('/gallery/images/{itemId}', [HomeController::class, 'getGalleryImages'])->name('gallery.images');

Route::prefix('/user')->namespace('App\Http\Controllers\Front')->group(function () {
    Route::match(['get', 'post'], 'login', [UserController::class, 'Login']);
    Route::group(['middleware' => ['web']], function () {
        //Route::get('dashboard','AdminController@dashboard');
        Route::get('logout', [UserController::class, 'Logout'])->name('user.logout');

        Route::get('profile/{id}', [UserController::class, 'Profile']);
        Route::get('my-donation/{id}', [UserController::class, 'MyDonation']);
        Route::get('on-going-donations', [UserController::class, 'OnGoingDonations']);
        Route::match(['get', 'post'], 'my-donation/donate/{id}', [UserController::class, 'donate']);

    });
});
