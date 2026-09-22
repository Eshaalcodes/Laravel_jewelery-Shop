<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubCategoryController;
 
use App\Http\Controllers\AuthController;
use App\Http\Middleware\UserRole;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackupController;



 
// REGISTER
 

Route::get('/register', [
    AuthController::class,
    'registerPage'
])->name('RegisterForm');;

Route::post('/registeruser', [
    AuthController::class,
    'register'
])->name('userRegister');


Route::fallback(function(){
return view('Error.404');
});

 
// LOGIN
 

Route::get('/', [
    AuthController::class,
    'loginPage'
])->name('loginFrom');

Route::post('/loginUser', [
    AuthController::class,
    'login'
])->name('userlogin');;


 
// LOGOUT
 

Route::post('/logout', [
    AuthController::class,
    'logout'
])->name('logout');

 
// CUSTOMER
 Route::get('/index', function () {

    $jewelryProducts = Product::with(['category', 'subcategory'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Jewelery');
        })
        ->get();

    $cosmeticsProducts = Product::with(['category', 'subcategory'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Cosmetics');
        })
        ->get();

    return view('welcome', compact(
        'jewelryProducts',
        'cosmeticsProducts'
    ));

 })->name('index');
 

 

 
 // ADMIN
Route::get('/admin', function () {

    // Dashboard counts
    $categories = \App\Models\Category::count();
    $products = \App\Models\Product::count();
    $orders = \App\Models\Order::count();
    $customers = \App\Models\User::where('role', 'customer')->count();

    // Top 10 Best-Selling Products
    $topProducts = \App\Models\OrderItem::select(
        'product_id',
        \DB::raw('SUM(quantity) as total_sold')
    )
    ->with('product')
    ->groupBy('product_id')
    ->orderByDesc('total_sold')
    ->take(10)
    ->get();

    // Top 10 Clients by Shopping
    $topClients = \App\Models\Order::select(
        'name',
        'email',
        \DB::raw('SUM(total) as total_spent')
    )
    ->groupBy('name', 'email')
    ->orderByDesc('total_spent')
    ->take(10)
    ->get();

    return view('Admin.dashboard', compact(
        'categories',
        'products',
        'orders',
        'customers',
        'topProducts',
        'topClients'
    ));

})->middleware(UserRole::class)->name('admin');






// CATEGORY
 Route::get('/categories', [
    CategoryController::class,
    'index'
])->middleware(UserRole::class)->name('category.index');

Route::get('/categories/create', [
    CategoryController::class,
    'create'
])->middleware(UserRole::class)->name('category.create');

Route::post('/categories', [
    CategoryController::class,
    'store'
])->middleware(UserRole::class)->name('category.store');

Route::get('/categories/{id}/edit', [
    CategoryController::class,
    'edit'
])->middleware(UserRole::class)->name('category.edit');

Route::post('/categories/{id}/update', [
    CategoryController::class,
    'update'
])->middleware(UserRole::class)->name('category.update');

Route::get('/categories/{id}/delete', [
    CategoryController::class,
    'destroy'
])->middleware(UserRole::class)->name('category.delete');
 
// sub categories
 Route::get('/subcategories', [SubCategoryController::class, 'index'])
    ->middleware(UserRole::class)
    ->name('subcategories.index');

Route::get('/subcategories/create', [SubCategoryController::class, 'create'])
    ->middleware(UserRole::class)
    ->name('subcategories.create');

Route::post('/subcategories', [SubCategoryController::class, 'store'])
    ->middleware(UserRole::class)
    ->name('subcategories.store');

Route::get('/subcategories/{id}/edit', [SubCategoryController::class, 'edit'])
    ->middleware(UserRole::class)
    ->name('subcategories.edit');

Route::put('/subcategories/{id}', [SubCategoryController::class, 'update'])
    ->middleware(UserRole::class)
    ->name('subcategories.update');

Route::delete('/subcategories/{id}', [SubCategoryController::class, 'destroy'])
    ->middleware(UserRole::class)
    ->name('subcategories.destroy');



    // products

 Route::get('/products', [ProductController::class, 'index'])
    ->middleware(UserRole::class);

Route::get('/products/create', [ProductController::class, 'create'])
    ->middleware(UserRole::class);

Route::post('/products/store', [ProductController::class, 'store'])
    ->middleware(UserRole::class);

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])
    ->middleware(UserRole::class);

Route::post('/products/update/{id}', [ProductController::class, 'update'])
    ->middleware(UserRole::class);

Route::get('/products/delete/{id}', [ProductController::class, 'delete'])
    ->middleware(UserRole::class);

//orders

Route::post('/orders/store', [OrderController::class, 'store']);
Route::get('/order-history', [OrderController::class, 'history'])
    ->middleware(UserRole::class)
    ->name('order.history');

Route::get('/order-success', function () {
    return view('order-success');
});


Route::get('/checkout', function () {

    $categories = Category::all();

    return view(
        'shop.checkout',
        compact('categories')
    );

});








// shop

Route::get('/shop/products', [ShopController::class, 'products']);


Route::get('/shop/products/{id}', [ShopController::class, 'show'])
    ->middleware(UserRole::class)
    ->name('shop.product.detail');

 Route::get('/cart', function () {
    return view('shop.cart');
});




 // COLLECTION

Route::get('/collection', function () {

    $jewelryProducts = Product::with(['category', 'subcategory'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Jewelery');
        })
        ->get();

    $cosmeticsProducts = Product::with(['category', 'subcategory'])
        ->whereHas('category', function ($query) {
            $query->where('name', 'Cosmetics');
        })
        ->get();

    return view('collection', compact(
        'jewelryProducts',
        'cosmeticsProducts'
    ));

})->middleware(UserRole::class)->name('collection');


















// cart
Route::get('/shopping-cart', [CartController::class, 'index'])
    ->name('shopping.cart');




// admin
 Route::get('/admin/orders', [AdminOrderController::class, 'index'])
    ->middleware(UserRole::class)
    ->name('admin.orders');

    // UPDATE ORDER STATUS
Route::post('/admin/orders/{id}/status', [
    AdminOrderController::class,
    'updateStatus'
])->middleware(UserRole::class)
  ->name('admin.orders.status');








  Route::get('/about', function () {
    return view('about');
})->middleware(UserRole::class)->name('about');


Route::get('/contact', function () {
    return view('contact');
})->middleware(UserRole::class)->name('contact');










// contact form
Route::post('/contact/send', [ContactController::class, 'send'])
    ->middleware(UserRole::class)
    ->name('contact.send');



    Route::get('/admin/contact-messages', [ContactController::class, 'index'])
    ->middleware(UserRole::class)
    ->name('admin.contact.messages');





    // faq

    Route::get('/faq', function () {
    return view('faq');
})->middleware(UserRole::class)->name('faq');




// backup


Route::get('/admin/backup', [BackupController::class, 'download'])
    ->name('admin.backup');




    //view products
    Route::get('/view-products', function () {
    return view('view-products');
})->name('view.products');