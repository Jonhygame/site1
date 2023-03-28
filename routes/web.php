<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\sitecontroller;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\apitablescontroller;
use App\Mail\sendmail;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[sitecontroller::class,'landingpage'])->name('index');
Route::resource('/contact', contactcontroller::class);
Route::get('/contacttable/contact', function () {return response()->json(['data'=>Contact::all()]);});
Route::post('/comments', [productcontroller::class,'commentsbd'])->name('commentsbd');
Route::get('/about',[sitecontroller::class,'aboutpage'])->name('about');
Route::get('/faq',[sitecontroller::class,'faqpage'])->name('faq');
Route::get('/shop',[productcontroller::class,'shoppage'])->name('shop');
Route::get('/contactmail', [sendmail::class,'build'])->name('contactmail');
Route::get('/categories',[sitecontroller::class,'categories'])->name('categories');
Route::get('/detailproducts/{id}',[productcontroller::class,'detailproductspage'])->name('detailproducts');
Route::get('/login',[siteController::class,'login'])->name('login');
Route::resource('/register', registercontroller::class);
Route::get('/products', [sitecontroller::class,'products'])->name('products');
Route::get('/users', [sitecontroller::class,'users'])->name('users');
Route::get('/api_tables', [sitecontroller::class,'api_tables']);
Route::resource('/apitables', apitablescontroller::class);

Route::get('/productstable/apitables', function () { 
    $productsResponse = Http::get('http://localhost:3000/products');
    //return response()->json(['data' => $productsResponse->object()]);
});


Route::get('/userstable/apitables', function () { 
    $usersResponse = Http::get('http://localhost:3000/users');
    //return response()->json(['data' => $usersResponse->object()]);
});

Route::get('/mongo_users', function(){
    $response = Http::get('http://localhost:3000/users');
    echo "<pre>";
    print_r($response->object());
    echo "<pre>";
});

Route::post('/USUARIOS',function(Request $request){
    $response = Http::post('http://localhost:3000/users',[
        'name' => $request->name,   
        'email' => $request->email,
        'password' => $request->password,
    ]);
    return redirect()->route('apitables.index');
});