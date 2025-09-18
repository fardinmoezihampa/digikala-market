<?php

use App\Livewire\Admin\Dashboard\Index as dashboardIndex;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', dashboardIndex::class)->name('admin.dashboard.index');
