<?php

use App\Http\Controllers\AddProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\SubMenuItemController;
use Illuminate\Support\Facades\Auth;


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

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/logout', function () {
//     Session::forget('user');
//     return redirect('login');
// });


Route::get('/', function () {
    return view('index');
});

// Route::view('/register','register');
// Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("/category",[ProductController::class,'category']);
Route::get("/blog",[ProductController::class,'blog']);
Route::get("/contact",[ProductController::class,'contact']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
Route::get("/search",[ProductController::class,'search']);
Route::get("/search",[ProductController::class,'search']);

// Route::get("/ordernow",[ProductController::class,'orderNow']);
// Route::post("/orderplace",[ProductController::class,'orderPlace']);

Route::post('/add-to-cart',[CartController::class,'addtocart'])->name('add.cart');
Route::get('/cart',[CartController::class,'index']);
Route::get('/load-cart-data',[CartController::class,'cartloadbyajax'])->name('load.cart');
Route::post('update-to-cart',[CartController::class,'updatetocart']);
Route::delete('delete-from-cart',[CartController::class,'deletefromcart']);
Route::get('clear-cart',[CartController::class,'clearcart']);
// Route::get('checkout',[CheckController::class,'index']);
Route::get('collection/{category_id}/product',[ProductController::class,'product']);




Auth::routes();


Route::group(['middleware' => ['auth','isUser']], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::get('my-profile',[App\Http\Controllers\Frontend\UserController::class,'myprofile']);
    // Route::post('my-profile-update',[App\Http\Controllers\Frontend\UserController::class,'profileupdate']);
    Route::get('checkout',[CheckController::class,'index']);
    Route::post('place-order',[CheckController::class,'storeorder']);
    Route::get("/thenk-you",[ProductController::class,'myOrders']);

    Route::post('confirm-razorpay-payment',[CheckController::class,'checkamount']);
    });






Route::group(['middleware' => ['auth','isAdmin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/table',[AdminController::class,'table']);
    Route::get('/usertable',[AdminController::class,'usertable']);

    Route::get('/orderitemtable',[AdminController::class,'orderitemtable']);
    Route::get('/menu',[MenuItemController::class,'menu']);
    Route::post('/menuitem/store',[MenuItemController::class,'store'])->name('menuitem.store');
    Route::get('/submenu',[SubMenuItemController::class,'submenu']);
    Route::post('/submenuitem/store',[SubMenuItemController::class,'store'])->name('submenuitem.store');

    Route::get('/table', [EmployeeController::class, 'index']);
    Route::post('/store', [EmployeeController::class, 'store'])->name('store');
    Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
    Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
    Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
    Route::post('/update', [EmployeeController::class, 'update'])->name('update');
    Route::get('/addproduct',[AddProductController::class,'index']);
    Route::post('/postData',[AddProductController::class,'postData']);
    Route::get('showproduct',[AddProductController::class,'showProduct']);
    Route::get('product-edit/{id}',[AddProductController::class,'edit']);
    Route::put('product-update/{id}',[AddProductController::class,'update']);
    Route::get('delete/{id}',[AddProductController::class,'delete']);

    //order details
    Route::get('/ordertable',[OrderController::class,'ordertable']);
    Route::get('/pending-order',[OrderController::class,'pendingOrder']);
    Route::get('/complete-order',[OrderController::class,'completeOrder']);
    Route::get('order-view/{order_id}',[OrderController::class,'vieworder']);
    Route::get('generate-invoice/{order_id}',[OrderController::class,'invoice']);

    //update order status
    Route::get('edit-status/{id}',[OrderController::class,'editstatus']);
    Route::put('update-status',[OrderController::class,'updatestatus']);

});
