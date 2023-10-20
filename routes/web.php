<?php

use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TablesdataController;
use App\Http\Controllers\TablesgeneralController;


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
Route::get('/dashboard', [DashboardController::class, 'home']);



Route::get('/', [AppController::class, 'showApp'])->name('show.app');
Route::get('/footer', [FooterController::class, 'showFooter'])->name('show.Footer');
Route::get('/header', [HeaderController::class, 'showHeader'])->name('show.Header');
Route::get('/sidebar', [SidebarController::class, 'showSidebar'])->name('show.Sidebar');
Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/settings', [SettingsController::class, 'showSettings'])->name('show.settings');
Route::get('/tabledata', [TablesdataController::class, 'showTablesdata'])->name('show.tabledata');
Route::get('/tablesgeneral', [TablesgeneralController::class, 'showTablesgeneral'])->name('show.tablegeneral');
  