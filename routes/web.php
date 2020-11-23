<?php
use \App\Mail\MyTestMail;
use Illuminate\Support\Facades\Route;
//use App\http\Controllers\CommerceController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\NewsletterController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome
    ');
});
//Route::get("/commerces/{commerce}/delete",CommerceController::Class,'destroy')->name('commerces.destroy');
//Route::get("/commerces",CommerceController::Class,'index')->name('commerces.index');

Route::resource('commerces',CommerceController::class);
Route::resource('categorie',CategorieController::class);
Route::get('newsletter',[NewsletterController::class, 'create']);
Route::post('newsletter',[NewsletterController::class, 'store']);
Route::get('send', function () {
   
    $details = [
        'title' => 'Mail from sadok',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('ahlem.benabderrazak@esprit.tn')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});
