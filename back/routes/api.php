<?php
use App\Http\Controllers\Api\ProductController;


// Route::namespace('Api')
//     ->group(function(){
//         // Route::apiResource('products', ProductController::class);
//         Route::get('/products', [ProductController::class, 'index']);
//        
// });

Route::apiResource('products',ProductController::class);
Route::put('/products/{id}', [ProductController::class, 'update']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);