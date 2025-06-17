<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\ListaUsers;
use App\Livewire\CadastroUser;
use App\Livewire\EditarUser;
use App\Livewire\CadastroFruta;
use App\Livewire\ListaFrutas;
use App\Livewire\EditarFruta;
use App\Http\Middleware\IsAdmin;

Route::get('/adm/login', Login::class)->name('loginadm');

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/adm', fn () => view('dashboard'))->name('/');
    Route::get('/adm/lista', ListaUsers::class)->name('lista');
    Route::get('/adm/cadastro', CadastroUser::class)->name('cadastro');
    Route::get('/adm/editar/{id}', EditarUser::class)->name('editar.user');
});

Route::post('/adm/logout', function () {
        Auth::logout();
        return redirect()->route('loginadm');
    })->name('logoutadm');

Route::post('logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');

Route::get('/login', Login::class)->name('login')->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/', CadastroFruta::class)->name('frutas');
    Route::get('/frutas', ListaFrutas::class)->name('lista.frutas');
    Route::get('/frutas/{id}/editar', EditarFruta::class)->name('editar.fruta');
});

