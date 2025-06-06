<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Login;
use App\Livewire\ListaUsers;
use App\Livewire\CadastroUser;
use App\Http\Middleware\IsAdmin;

Route::get('/adm/login', Login::class)->name('login');

Route::middleware(['auth', IsAdmin::class])->group(function () {
    Route::get('/adm', fn () => view('dashboard'))->name('/');
    Route::get('/adm/lista', ListaUsers::class)->name('lista');
    Route::get('/adm/cadastro', CadastroUser::class)->name('cadastro');
});

Route::post('/logout', function () {
        Auth::logout();
        return redirect()->route('login');
    })->name('logout');