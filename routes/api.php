<?php

declare(strict_types = 1);

use App\Http\Controllers\API\Pictures\PicturesController;
use App\Http\Controllers\API\Products\ProductsController;
use App\Http\Controllers\API\Applications\ApplicationsController;
use App\Http\Controllers\API\Positions\PositionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/positions', [PositionsController::class, 'getPositions']);
Route::get('/position/{id}', [PositionsController::class, 'getOnePosition']);
Route::get('/product/{id}/positions', [PositionsController::class, 'getPositionsByProduct']);
Route::post('/application', [ApplicationsController::class, 'create']);

Route::get('/products_ids', [ProductsController::class, 'getAllIds']);
Route::get('/positions_ids', [PositionsController::class, 'getAllIds']);
Route::get('/first_existing_picture_url', [PicturesController::class, 'getFirstExistingPictureUrl']);
