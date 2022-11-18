<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BajuController;
use App\Http\Controllers\CelanaController;
use App\Http\Controllers\SepatuController;
use App\Models\Baju;
use App\Models\Celana;
use App\Models\Sepatu;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function(){
    return view('supplier.landingPage');
});

Route::get('/supplier', function () {
    return view('supplier.home',[
        "bajus" => Baju::all(),
        "celanas" => Celana::all(),
        "sepatus" => Sepatu::all()

    ]);
})->middleware('auth');

Route::get('/supplier/baju', function () {
    return view('supplier.baju',[
        "bajus" => Baju::all()
    ]);
})->name("supplier.baju")->middleware('auth');

Route::get('/supplier/celana', function () {
    return view('supplier.celana',[
        "celanas" => Celana::all()
    ]);
})->name("supplier.celana")->middleware('auth');

Route::get('/supplier/sepatu', function () {
    return view('supplier.sepatu',[
        "sepatus" => Sepatu::all()
    ]);
})->name("supplier.sepatu")->middleware('auth');


Route::get('/supplier_register', function () {
    return view('supplier.register');
})->name("register");

Route::post('/action-register',[
    AuthController::class, 'actionRegister'
]);

Route::get('/supplier_login', [
    AuthController::class, 'loginView'
])->name("login");

Route::post('/action-login',[
    AuthController::class, 'actionLogin'
]);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/baju', [BajuController::class, 'index'])->name('baju.index');
Route::get('/celana', [CelanaController::class, 'index'])->name('celana.index');
Route::get('/sepatu', [SepatuController::class, 'index'])->name('sepatu.index');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

Route::get('/baju/create', [BajuController::class, 'create'])->name('baju.create');
Route::post('/baju/store', [BajuController::class, 'store'])->name('baju.store')->middleware('auth');

Route::get('/baju/show/{id}', [BajuController::class, 'show'])->name('baju.show')->middleware('auth');

Route::get('/baju/{id}/edit', [BajuController::class, 'edit'])->name('baju.edit')->middleware('auth');
Route::post('/baju/{id}', [BajuController::class, 'update'])->name('baju.update')->middleware('auth');

Route::get('/baju/{id}', [BajuController::class, 'destroy'])->name('baju.delete')->middleware('auth');


Route::get('/celana/create', [CelanaController::class, 'create'])->name('celana.create');
Route::post('/celana/store', [CelanaController::class, 'store'])->name('celana.store')->middleware('auth');

Route::get('/celana/show/{id}', [CelanaController::class, 'show'])->name('celana.show')->middleware('auth');

Route::get('/celana/{id}/edit', [CelanaController::class, 'edit'])->name('celana.edit')->middleware('auth');
Route::post('/celana/{id}', [CelanaController::class, 'update'])->name('celana.update')->middleware('auth');

Route::get('/celana/{id}', [CelanaController::class, 'destroy'])->name('celana.delete')->middleware('auth');


Route::get('/sepatu/create', [SepatuController::class, 'create'])->name('sepatu.create');
Route::post('/sepatu/store', [SepatuController::class, 'store'])->name('sepatu.store')->middleware('auth');

Route::get('/sepatu/show/{id}', [SepatuController::class, 'show'])->name('sepatu.show')->middleware('auth');

Route::get('/sepatu/{id}/edit', [SepatuController::class, 'edit'])->name('sepatu.edit')->middleware('auth');
Route::post('/sepatu/{id}', [SepatuController::class, 'update'])->name('sepatu.update')->middleware('auth');

Route::get('/sepatu/{id}', [SepatuController::class, 'destroy'])->name('sepatu.delete')->middleware('auth');



//admin
Route::get('/admin_login', [
    AuthController::class, 'loginViewAdmin'
])->name("admin.login");

Route::post('/action-login-admin',[
    AuthController::class, 'actionLoginAdmin'
]);

Route::get('/admin', function () {
    return view('admin.home', [
        "bajus" => Baju::all(),
        "celanas" => Celana::all(),
        "sepatus" => Sepatu::all()
    ]);
})->name("admin.home");

Route::get('/admin/baju', function () {
    return view('admin.baju_admin',[
        "bajus" => Baju::all()
    ]);
})->name("admin.baju")->middleware('auth');

Route::get('/admin/celana', function () {
    return view('admin.celana_admin',[
        "celanas" => Celana::all()
    ]);
})->name("admin.celana")->middleware('auth');

Route::get('/admin/sepatu', function () {
    return view('admin.sepatu_admin',[
        "sepatus" => Sepatu::all()
    ]);
})->name("admin.sepatu")->middleware('auth');

Route::get('/admin/baju/show/{id}', [AdminController::class, 'showbaju'])->name('admin.show_baju')->middleware('auth');
Route::get('/admin/celana/show/{id}', [AdminController::class, 'showcelana'])->name('admin.show_celana')->middleware('auth');
Route::get('/admin/sepatu/show/{id}', [AdminController::class, 'showsepatu'])->name('admin.show_sepatu')->middleware('auth');

Route::get('/admin/baju/{id}/edit', [BajuController::class, 'editBajuAdmin'])->name('admin.baju.edit')->middleware('auth');
Route::post('/admin/baju/{id}', [BajuController::class, 'updateBajuAdmin'])->name('admin.baju.update')->middleware('auth');

Route::get('/admin/celana/{id}/edit', [CelanaController::class, 'editCelanaAdmin'])->name('admin.celana.edit')->middleware('auth');
Route::post('/admin/celana/{id}', [CelanaController::class, 'updateCelanaAdmin'])->name('admin.celana.update')->middleware('auth');

Route::get('/admin/sepatu/{id}/edit', [SepatuController::class, 'editSepatuAdmin'])->name('admin.sepatu.edit')->middleware('auth');
Route::post('/admin/sepatu/{id}', [SepatuController::class, 'updateSepatuAdmin'])->name('admin.sepatu.update')->middleware('auth');

