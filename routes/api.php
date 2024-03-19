<?php
use App\Models\TournamentCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TournamentCalendarController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
Route::get("/TournamentCalendar", [TournamentCalendarController::class, 'index']);
Route::post("/TournamentCalendar", [TournamentCalendarController::class, 'store']);
Route::put("/TournamentCalendar/{id}", [TournamentCalendarController::class, 'update']);
Route::patch("/TournamentCalendar/{id}", [TournamentCalendarController::class, 'update']);
Route::delete("/TournamentCalendar/{id}", [TournamentCalendarController::class, 'destroy']);
*/


Route::apiResource('/TournamentCalendar', TournamentCalendarController::class);
Route::get('/TournamentCalendar/{id}/edit', [TournamentCalendarController::class, 'edit']); // Módosítás űrlap betöltése
Route::get('/TournamentCalendar/{id}/get', [TournamentCalendarController::class, 'getById']); // Id alapján lekérdezés
Route::put('/TournamentCalendar/{id}', [TournamentCalendarController::class, 'updateById']); // Id alapján frissítés
Route::delete('/TournamentCalendar/{id}', [TournamentCalendarController::class, 'deleteById']); // Id alapján törlés
