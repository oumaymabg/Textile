<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ManageProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ClientsController;
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


Route::resource('/product', ProductController::class);  //page de produit (create -delete -edit)
Route::resource('/order', OrdersController::class);

//Route::get('/addOrder', OrdersController::class, 'addOrder');


Route::get('/clients', ClientsController::class, 'index');

/* Route::get('/listOfProduct', function () {   //la 1ere page index
    return view('File.list_of_products');
}); */

//Route::get('/welcome', function () {
  //  return view('welcome');
//});

Route::get('/', function () {   //la 1ere page index
    return view('home.index');
});
Route::get('/contact', function () {   //la 1ere page index
    return view('home.contact');
});
Route::get('/about', function () {   //la 1ere page index
    return view('home.about');
});
Route::get('/services', function () {   //la 1ere page index
    return view('home.services');
});
/* Route::get('/dashboard', function () {   //la 1ere page index
    return view('dashboard');
}); */


Route::post('/logout', dashboardController::class, '__invoke');
Route::get('/dashboard', ManageProduct::class, '__invoke');
//Route::get('/signup', signupController::class, '__invoke');
//Route::get('/contact', contactController::class, '__invoke');


Route::get('/File', function () {   
    return view('File.index');
});
/* Route::get('/dashboard', function () {   //la 1ere page index
    return view('File.copyindex');
}); */ 
/*Route::get('/basic_elements', function () {   
    return view('File.pages.forms.basic_elements');
});
*/
/* Route::get('/add_client', function () {   
    return view('File.add_new_clients');
}); */
 /* Route::get('/add_product', function () {   
    return view('File.add_new_product');
}); */
/* Route::get('/add_order', function () {   
    return view('File.add_new_order');
});
*/
Route::get('/tablesorder', function () {   
    return view('File.tablesorder');
});
/*Route::get('/basic_elements', function () {   
    return view('File.pages.tables.basic-table');
});
*/
Route::get('/charts', function () {   
    return view('File.charts');
});
Route::get('/Listeclient', function () {   
    return view('File.Listeclient');
});
Route::get('/Listpending', function () {   
    return view('File.Listpending');
});