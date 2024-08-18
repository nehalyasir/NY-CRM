<?php

use App\Http\Controllers\CacheController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ordersController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

// Route::get('/menus', [MainController::class, 'index'])->name('nav');
Route::get('/Register', [MainController::class, 'Register'])->name('Register');
Route::get('/Login', [DashboardController::class, 'Login'])->name('Login');

Route::get('/', function () {
    return view('main.home');
});

Route::prefix('/admin')->group(function(){
    Route::prefix('/products')->group(function () {
        //=================================== Products ======================================
        Route::get('/addproduct', [productController::class , 'CreateProducts'])->name('AddProducts'); // Products Add
        Route::get('/viewproduct', [productController::class , 'ViewProducts'])->name('ViewProducts'); // Products View
        //=================================== Products ======================================
    });
    Route::prefix('/customers')->group(function () {
        //=================================== Customers ======================================
        Route::get('/addcustomers', [customersController::class , 'Customers'])->name('AddCustomers'); // Customers Add
        Route::post('/addcustomers', [customersController::class , 'CreateCustomers'])->name('AddCustomers'); // Customers Add
        Route::get('/viewcustomers', [customersController::class , 'ViewCustomers'])->name('ViewCustomers'); // Customers View
        //=================================== Customers ======================================
    });

    Route::prefix('/orders')->group(function () {
        //=================================== Orders ======================================
        Route::get('/salesorder', [ordersController::class , 'CreateSalesOrders'])->name('SalesOrders'); // Sales Orders
        Route::get('/viewsalesorder', [ordersController::class , 'ViewSalesOrders'])->name('ViewSalesOrders'); // Sales Orders View

        Route::get('/salesinvoice', [ordersController::class , 'CreateSalesInvoice'])->name('SalesInvoice'); // Sales Invoice
        Route::get('/viewsalesinvoice', [ordersController::class , 'ViewSalesInvoice'])->name('ViewSalesInvoice'); // Sales Invoice View

        Route::get('/purchaseorder', [ordersController::class , 'CreatePurchaseOrder'])->name('PurchaseOrders'); // Purchase Order
        Route::get('/viewpurchaseorder', [ordersController::class , 'ViewPurchaseOrder'])->name('ViewPurchaseOrder'); // Purchase Order View

        Route::get('/purchaseinvoice', [ordersController::class , 'CreatePurchaseInvoice'])->name('PurchaseInvoice'); // Purchase Invoice
        Route::get('/viewpurchaseinvoice', [ordersController::class , 'PurchaseInvoice'])->name('ViewPurchaseInvoice'); // Purchase Invoice View

        //=================================== Orders ======================================
    });

    //=================================== clearchach ======================================
        Route::get('/clearchach', [CacheController::class, 'clearCache'])->name('clearCache');
    //=================================== clearchach ======================================

});

//=================================== error404 ======================================
Route::fallback(function () {
    return view('error.error404');
});
//=================================== error404 ======================================
