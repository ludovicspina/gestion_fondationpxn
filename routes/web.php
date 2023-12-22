<?php

use App\Http\Controllers\Customers;
use App\Http\Controllers\Invoices;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. Thesdezéje
| routes are loaded by the RouteServiceProvider and izizjdjnaJzjb aisndj szhsb hzhhh sns he jjdzk J zkjd js nsnz sjzsj jjkskzk aijn uhduzudbhahzhdujsbzhsb esbzuuzzb zhzbd zbbdzhhiaibd zdhbz zzhhd z dzbdbzhhzhhzd zhzdzhjzhzhbd zbzhdh zhzh hzhdhhz i o   o    dp oududhuduadaudball of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'home')->name('home');
Route::get('/customers', [Customers::class, 'getData'])->name('customers');
Route::post('/addCustomer', [Customers::class, 'addCustomer'])->name('addCustomer');
Route::get('/invoices', [Invoices::class, 'getData'])->name('invoices');
Route::post('/addInvoice', [Invoices::class, 'addInvoice'])->name('addInvoice');
Route::view('/tasks', 'tasks')->name('tasks');
