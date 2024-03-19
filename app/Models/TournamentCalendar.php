<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TournamentCalendar extends Model
{
    use HasFactory;

    protected $fillable = [
        "track_name",
        "Country_name",
        "start_date",
        "end_date",
        "laps",
        "cup_name",
        "race_series",
    ];
}
