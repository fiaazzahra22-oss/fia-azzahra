<?php

use Illuminate\Support\Facades\Route;
use App\Models\Destination;
use App\Http\Controllers\DestinationController;

Route::get( uri:'/', action: function () {
    return view( view:'welcome');
});
Route::get( uri:'/halo', action: function () {
    $nama = "fia";
    $hobis = ['membaca', 'menulis', 'coding'];
    return view( view:'halo', data: compact('nama', 'hobis'));
});
Route::get( uri: "/switch", action: function () {
    $role = "penulis";
    return view('switch', data: compact('role'));
});

Route::get( uri: "master", action: function () {
    return view( view:'pages.home');
});

Route:: get( uri: "/about", action: function () {
    return view( view:'pages.about');
});

Route::get( uri: "/destinasi", action: function () {
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

Route::get( uri: "/destinations", action: function () {
    $destinations = Destination::all();
    return view('pages.indexDestinasi', compact('destinations'));
});

Route::get( uri: "/data/{id}", action: function ($id) {
    $destination = Destination::find($id);
    return view( view: 'pages.data', data: compact('destination'));
});

Route::get(
    uri: "/destinations",
    action: [DestinationController::class, 'index']
);

Route::get( uri: "/detaildestinasi/{id}", action: [DestinationController::class, 'show']);

Route::get("/destinations/create", [DestinationController::class, 'create']);
Route::post("/destinations", [DestinationController::class, 'store']);

Route::delete('/destination/{id}', [DestinationController::class, 'delete']);

Route::get("/destinations/{id}/edit", [DestinationController::class, 'edit']);
Route::put("/destinations/{id}/update", [DestinationController::class, 'update']);