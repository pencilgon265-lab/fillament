<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

Route::get('/uploads/{folder}/{filename}', function ($folder, $filename) {
   $path = "{$folder}/{$filename}";

   if (!Storage::disk('private')->exists($path)) {
       abort(404);
   }

   $file = Storage::disk('private')->get($path);
   $mime = Storage::disk('private')->mimeType($path);

   return Response::make($file, 200, [
       'Content-Type' => $mime,
       'Cache-Control' => 'public, max-age=86400', // biar cepat di-load
   ]);
});

Route::get('/', [LandingController::class, 'index']);


