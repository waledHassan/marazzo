<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


 ////////////////////  Redirect
Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth') ;

Route::get('/',[HomeController::class,'redirect']);

Route::get('/index',[HomeController::class,'redirect']);

Route::get('/home',[HomeController::class,'redirect']);
///////////////////// End Redirect


//////////////////// Products

// Admin Add Product Route
Route::get('/add_product_form',[AdminController::class,'add_product_form']);

// Admin Upload Product Route
Route::post('/upload_product',[AdminController::class,'upload_product']);

// Admin Show All Product Route
Route::get('/show_products',[AdminController::class,'show_products']);

// Admin Delete From Product Route
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);

// Admin Delete From Product Route
Route::get('/update_product_form/{id}',[AdminController::class,'update_product_form']);

// Admin Delete From Product Route
Route::post('/do_update_product/{id}',[AdminController::class,'do_update_product']);

// Admin Show All Product Color Route
Route::get('/show_products_color',[AdminController::class,'show_products_color']);

// Admin Add Product Color Form Route
Route::get('/add_color_form/{id}',[AdminController::class,'add_color_form']);

// Admin Add Product Color Form Route
Route::post('/upload_color/{id}',[AdminController::class,'upload_color']);

// Admin Add Product Size Form Route
Route::get('/add_size_form/{id}',[AdminController::class,'add_size_form']);

// Admin Add Product size Form Route
Route::post('/upload_size/{id}',[AdminController::class,'upload_size']);

//////////////////// End Products Routes


////////////////// categories

// Admin Show Categories Route
Route::get('/show_categories',[AdminController::class,'show_categories']);

// Admin Show Sub Categories Route
Route::get('/show_sub_category/{id}',[AdminController::class,'show_sub_category']);

// Admin Show Child Categories Route
Route::get('/show_child_category/{id}',[AdminController::class,'show_child_category']);

// Admin Update Categories Route
Route::get('/update_category_form/{id}',[AdminController::class,'update_category_form']);

// Admin Do Update Categories Route
Route::post('/do_update_category/{id}',[AdminController::class,'do_update_category']);

// Admin Delete Category Route
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

// Admin Add Categories Route
Route::get('/add_category_form',[AdminController::class,'add_category_form']);

// Admin Upload Categories Route
Route::post('/upload_category',[AdminController::class,'upload_category']);

// Admin Update Categories Route
Route::get('/update_sub_category_form/{id}',[AdminController::class,'update_sub_category_form']);

// Admin Do Update Categories Route
Route::post('/do_update_sub_category/{id}',[AdminController::class,'do_update_sub_category']);

// Admin Update Categories Route
Route::get('/update_sub_category_form/{id}',[AdminController::class,'update_sub_category_form']);

// Admin Delete Sub Category Route
Route::get('/delete_sub_category/{id}',[AdminController::class,'delete_sub_category']);

// Admin Add Sub Category Route
Route::get('/add_sub_category_form/{id}',[AdminController::class,'add_sub_category_form']);

// Admin Upload Sub Categories Route
Route::post('/upload_sub_category/{id}',[AdminController::class,'upload_sub_category']);

// Admin Add Child Category Route
Route::get('/add_child_category_form/{id}',[AdminController::class,'add_child_category_form']);

// Admin Upload Sub Categories Route
Route::post('/upload_child_category/{id}',[AdminController::class,'upload_child_category']);

// Admin Update Categories Route
Route::get('/update_child_category_form/{id}',[AdminController::class,'update_child_category_form']);

// Admin Do Update Child Categories Route
Route::post('/do_update_child_category/{id}',[AdminController::class,'do_update_child_category']);

// Admin Delete Sub Category Route
Route::get('/delete_child_category/{id}',[AdminController::class,'delete_child_category']);

///////////////// End Categories Rotes

//////////////// users

// Admin Show All Users Route
Route::get('/show_users',[AdminController::class,'show_users']);
/////////////// End Users Rotes





//////////////////////// HomeController /////////////////////

// User Show Products Route
Route::get('/shopAll',[HomeController::class,'shopAll']);

// User Show Products Price Low -> High Route
Route::get('/priceLow',[HomeController::class,'priceLow']);

// User Show Products Price high -> low Route
Route::get('/priceHigh',[HomeController::class,'priceHigh']);

// User Show Products Price high -> low Route
Route::get('/name_A_To_Z',[HomeController::class,'name_A_To_Z']);

// User Show Products Shop By Child Category Route
Route::get('/shopByChildCategory/{name}',[HomeController::class,'shopByChildCategory']);

// User Show Product Details Route
Route::get('/product_detail/{id}',[HomeController::class,'product_detail']);

// User Show Product By Tags Route
Route::get('/shopByTag/{tag}',[HomeController::class,'shopByTag']);

// User Add To Cart Route
Route::get('/addToCart/{id}',[HomeController::class,'addToCart']);

// User Add To wishlist Route
Route::get('/AddToWishlist/{id}',[HomeController::class,'AddToWishlist']);

// User Show Wishlist Route
Route::get('/myWishlist',[HomeController::class,'myWishlist']);

// User Show Cart Route
Route::get('/MyCart',[HomeController::class,'MyCart']);

// User Show Compare Route
Route::get('/MyCompare',[HomeController::class,'MyCompare']);

// User Cash On Delivery Route
Route::get('/cash_order',[HomeController::class,'cash_order']);

// User Add To Cart From wishlist Route
Route::get('/addToCartFromWish/{id}',[HomeController::class,'addToCartFromWish']);

// User Add To Cart From Compare Route
Route::get('/addTocartFromCompare/{id}',[HomeController::class,'addTocartFromCompare']);

// User Add To Compare Route
Route::get('/AddToCompare/{id}',[HomeController::class,'AddToCompare']);

// User Delete From Cart Route
Route::get('/deleteFromCart/{id}',[HomeController::class,'deleteFromCart']);

// User Delete From Compare Route
Route::get('/deleteFromCompare/{id}',[HomeController::class,'deleteFromCompare']);

// User Delete From Wishlist Route
Route::get('/deleteFromWishlist/{id}',[HomeController::class,'deleteFromWishlist']);

// User Add Review Route
Route::post('/add_review/{id}',[HomeController::class,'add_review']);

// User Add Comment Route
Route::post('/add_comment/{id}',[HomeController::class,'add_comment']);

// User Add Comment Route
Route::post('/add_reply/{id}',[HomeController::class,'add_reply']);

// User Add Comment Route
Route::get('/search',[HomeController::class,'search']);
