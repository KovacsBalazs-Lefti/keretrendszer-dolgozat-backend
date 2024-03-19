<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TournamentCalendar;
use Illuminate\Http\Request;


class TournamentCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournaments = TournamentCalendar::orderBy('start_date', 'asc')->get();
        return response()->json($tournaments);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $TournamentCalendar = TournamentCalendar::create([
            "track_name" =>  $request->track_name,
            "Country_name" =>  $request->Country_name,
            "start_date" => $request->start_date,
            "end_date"=>  $request->end_date,
            "laps" => $request->laps,
            "cup_name"=>  $request->cup_name,
            "race_series" => $request->race_series,
        ]);
        return $TournamentCalendar;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tournament = TournamentCalendar::find($id);
        if (is_null($tournament)) {
        return response()->json(["message" => "No item found with id: $id"], 404);
    }
    return response()->json($tournament);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //put
        //$TournamentCalendar = TournamentCalendar::find($id);
        //$TournamentCalendar->fill(["track_name" =>  $request->track_name,
        //"Country_name" =>  $request->Country_name,
        //"start_date" => $request->start_date,
        //"end_date"=>  $request->end_date,
        //"laps" => $request->laps,
        //"cup_name"=>  $request->cup_name,
       // "race_series" => $request->race_series,]);
        //$TournamentCalendar->save();
       // return $TournamentCalendar;

        //patch végpont
        $TournamentCalendar = TournamentCalendar::find($id);
        if (is_null($TournamentCalendar)){
            return response()->json(["message"=> "No item found with id: $id"], 404);
        }
        $TournamentCalendar->fill($request->all());
        $TournamentCalendar->save();
        return $TournamentCalendar;



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $TournamentCalendar = TournamentCalendar::find($id);
        if (is_null($TournamentCalendar)){
            return response()->json(["message"=> "No item found with id: $id"], 404);
        }
        $TournamentCalendar->delete();
        return response()->noContent();
    }
}
