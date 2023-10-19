<?php
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentDataController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\fetchDataController;
use Illuminate\Support\Facades\Route;

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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Customer.index');
}); */
Route::get('Customer/index', [CustomerController::class, 'create']);
Route::post('Customer/store', [CustomerController::class, 'store'])->name('customers.index');
Route::get('admin/faqform', [FAQsController::class, 'create']);
Route::post('admin/faqform', [FAQsController::class, 'store'])->name('f_a_qs.faqform');
Route::get('admin/studentData', [CustomerController::class, 'index']);
Route::get('admin/fetchData', [FAQsController::class, 'index']);
Route::get('admin/editData/{id}', [FAQsController::class, 'edit']);
Route::put('updateData/{id}', [FAQsController::class, 'update']);
Route::get('deleteData/{id}', [FAQsController::class, 'destroy']);
Route::get('admin/deletedData/{id}', [FAQsController::class, 'show'])->name('getDeletedData');
Route::get('restoredeletedData/{id}', [FAQsController::class, 'restoreDeletedData'])->name('restoreDeletedData');
Route::get('deletePermanently/{id}', [FAQsController::class, 'deletePermanently'])->name('deletePermanently');

Route::get('admin/edit/{id}', [CustomerController::class, 'edit']);
Route::put('update/{id}', [CustomerController::class, 'update']);
Route::get('delete/{id}', [CustomerController::class, 'destroy']);
Route::get('admin/trash/{id}', [CustomerController::class, 'show'])->name('getTrash');
Route::get('restoreTrash/{id}', [CustomerController::class, 'restoreTrashData'])->name('restoreTrashData');
Route::get('deletePermanent/{id}', [CustomerController::class, 'deletePermanent'])->name('deletePermanent');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   
});

require __DIR__.'/auth.php';
