<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RiderController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=> 'admin', 'middleware'=>['isAdmin', 'auth', 'PreventBackHistory']], function()
{
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/orders', [MainController::class, 'orders'])->name('admin.orders');

    Route::get('/customers', [MainController::class, 'customers'])->name('admin.customers');

    Route::get('/preppers', [MainController::class, 'preppers'])->name('admin.preppers');

    Route::get('/drivers', [MainController::class, 'drivers'])->name('admin.drivers');

    Route::get('/menu', [MainController::class, 'menu'])->name('admin.menu');

    Route::get('/payments-preppers', [MainController::class, 'paymentsPreppers'])->name('admin.payments-preppers');
    Route::get('/payments-drivers', [MainController::class, 'paymentsDrivers'])->name('admin.payments-drivers');

    Route::get('/revenue-preppers', [MainController::class, 'revenuePreppers'])->name('admin.revenue-preppers');
    Route::get('/revenue-drivers', [MainController::class, 'revenueDrivers'])->name('admin.revenue-drivers');
    Route::get('/revenue-orders', [MainController::class, 'revenueOrders'])->name('admin.revenue-orders');


    //
    // Profile Settings
    //
    Route::get('/change-password', [AdminController::class, 'change_password'])->name('admin.change-password');
    Route::post('/change-password', [AdminController::class, 'update_password'])->name('admin.change-password');
    Route::get('/change-email', [AdminController::class, 'change_email'])->name('admin.change-email');
    Route::post('/change-email', [AdminController::class, 'update_email'])->name('admin.change-email');


});










Route::group(['prefix'=> 'agent', 'middleware'=>['isAgent', 'auth', 'PreventBackHistory']], function()
{
    Route::get('/dashboard', [AgentController::class, 'index'])->name('agent.dashboard');
    //
    // Product & Categories
    //
    Route::get('/categories', [MainController::class, 'category'])->name('agent.categories');
    Route::get('/add-category', [MainController::class, 'addCategory'])->name('agent.add-category');
    Route::get('/product', [MainController::class, 'products'])->name('agent.product');
    Route::get('/add-product', [MainController::class, 'addProduct'])->name('agent.add-product');
    //
    // Managers
    //
    // Route::get('/managers', [MainController::class, 'managers'])->name('agent.managers');
    //
    // Customers
    //
    Route::get('/customers', [MainController::class, 'customers'])->name('agent.customers');
    Route::get('/del-customer/{id}', [MainController::class, 'del_customer'])->name('agent.del-customer');
    Route::get('/block-customer/{id}/{status}', [MainController::class, 'block_customer'])->name('agent.block-customer');
    //
    // Resturant Orders
    //
    Route::get('/orders', [MainController::class, 'orders'])->name('agent.orders');

    //
    // Resturant Sales Matrix
    //
    Route::get('/sales', [MainController::class, 'sale'])->name('agent.sales');

    Route::get('/invoice', [MainController::class, 'invoice'])->name('agent.invoice');


    //
    // Riders
    //
    Route::get('/riders', [MainController::class, 'riders'])->name('agent.riders');
    Route::get('/del-rider/{id}', [MainController::class, 'del_rider'])->name('agent.del-rider');
    Route::get('/block-rider/{id}/{status}', [MainController::class, 'block_rider'])->name('agent.block-rider');
    Route::get('/approve-rider/{id}', [MainController::class, 'approve_rider'])->name('agent.approve-rider');
    //
    // Profile Settings
    //
    Route::get('/change-password', [AgentController::class, 'change_password'])->name('agent.change-password');
    Route::post('/change-password', [AgentController::class, 'update_password'])->name('agent.change-password');
    Route::get('/change-email', [AgentController::class, 'change_email'])->name('agent.change-email');
    Route::post('/change-email', [AgentController::class, 'update_email'])->name('agent.change-email');

});






Route::group(['prefix'=> 'user', 'middleware'=>['isUser', 'auth', 'PreventBackHistory']], function()
{

    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');

});

Route::group(['prefix'=> 'rider', 'middleware'=>['isRider', 'auth', 'PreventBackHistory']], function()
{
    Route::get('dashboard', [RiderController::class, 'index'])->name('rider.dashboard');
});
