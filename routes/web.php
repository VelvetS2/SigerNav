<?php

use App\Http\Controllers\WisataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/map', function () {
    return view('pages.map');
});

Route::view('/destinations', 'pages.destinations');

Route::view('/about', 'pages.about');

Route::get('/wisatas', [WisataController::class, 'index']);
Route::get('/wisatas/{wisatum}', [WisataController::class, 'show'])->name('wisatas.show');

Route::get('/db-test', function () {
    try {
        \DB::connection()->getPdo();
        return response()->json([
            'status' => 'success',
            'message' => 'Database connection is working!',
            'database' => \DB::connection()->getDatabaseName()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
            'code' => $e->getCode(),
            'trace' => $e->getTraceAsString()
        ], 500);
    }
});