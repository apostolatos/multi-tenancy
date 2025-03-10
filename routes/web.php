<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CompanyIndex;
use App\Livewire\CompanyCreate;
use App\Livewire\CompanyEdit;
use App\Livewire\UserCreate;
use App\Livewire\ProjectEdit;
use App\Livewire\UserIndex;

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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/companies', CompanyIndex::class)->name('companies.index');
    Route::get('/companies/create', CompanyCreate::class)->name('companies.create');
    Route::get('/companies/{company}/edit', CompanyEdit::class)->name('companies.edit');
    Route::get('/users', UserIndex::class)->name('users.index');
    Route::get('/users/create', UserCreate::class)->name('users.create');
    Route::get('/projects/{projectId}/edit', ProjectEdit::class)->name('projects.edit');
});

require __DIR__.'/auth.php';
