<?php

use App\Http\Controllers\AttractionController;
use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\UserController;
use App\Models\Attraction;

Route::get(uri: '/', action: function () {
    return view(view: 'welcome');
});
Route::get(uri: '/halo', action: function () {
    $nama = "fia";
    $hobis = ['membaca', 'menulis', 'coding'];
    return view(view: 'halo', data: compact('nama', 'hobis'));
});
Route::get(uri: "/switch", action: function () {
    $role = "penulis";
    return view('switch', data: compact('role'));
});

Route::get(uri: "master", action: function () {
    return view(view: 'pages.home');
});

Route::get(uri: "/about", action: function () {
    return view(view: 'pages.about');
});

Route::get(uri: "/destinasi", action: function () {
    $destinasi = [
        "nama" => "Bali",
        "harga" => 5000000,
        "lokasi" => "Denpasar, Bali",
        "durasi" => "4 Hari 3 Malam",
        "transportasi" => "Pesawat",
        "hotel" => "Bintang 4",
        "rating" => 4.8,
        "fasilitas" => ["Hotel", "Sarapan", "Tour Guide", "Transport Lokal"],
    ];
    return view('pages.destinasi', compact('destinasi'));
});

Route::get(uri: "/destinations", action: function () {
    $destinations = Destination::all();
    return view('pages.indexDestinasi', compact('destinations'));
});

Route::get(uri: "/data/{id}", action: function ($id) {
    $destination = Destination::find($id);
    return view(view: 'pages.data', data: compact('destination'));
});

Route::get(
    uri: "/destinations",
    action: [DestinationController::class, 'index']
);

Route::prefix('destinations.')->name('destinations.')->group(function () {
    Route::get('/',  [DestinationController::class, 'index'])->name('index');
    Route::get('/create',  [DestinationController::class, 'create'])->name('create');
    Route::post('/', [DestinationController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [DestinationController::class, 'edit'])->name('edit');
    Route::put('/{id}', [DestinationController::class, 'update'])->name('update');
    Route::delete('/{id}', [DestinationController::class, 'delete'])->name('destroy');
    Route::get('/{id}/show',  [DestinationController::class, 'show'])->name('show');
});

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/',  [UserController::class, 'index'])->name('index');
    Route::get('/create',  [UserController::class, 'create'])->name('create');
    Route::post('/', [UserController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/show',  [UserController::class, 'show'])->name('show');
});
Route::prefix('attraction')->name('attraction.')->group(function () {
    Route::get('/', [AttractionController::class, 'index'])->name('index');
    Route::get('/create', [AttractionController::class, 'create'])->name('create');
    Route::post('/store', [AttractionController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [AttractionController::class, 'edit'])->name('edit');
    Route::put('/{id}update', [AttractionController::class, 'update'])->name('update');
    Route::delete('/{id}', [AttractionController::class, 'delete'])->name('delete');
});
