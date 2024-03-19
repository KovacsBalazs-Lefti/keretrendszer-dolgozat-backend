<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TournamentCalendar;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TournamentCalendar>
 */
class TournamentCalendarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();

 $kupakOrszagok = [
            "Gran Turismo World Championship" => ["Global", "Tokyo Circuit"],
            "Sunday Cup" => ["Global", "Cape Ring"],
            "Clubman Cup" => ["Global", "Autodromo Nazionale Monza"],
            "FF Challenge" => ["Global", "Brands Hatch Circuit"],
            "MR Challenge" => ["Global", "Willow Springs International Raceway"],
            "European Classic Car Championship" => ["Europe", "Circuit de la Sarthe"],
            "Japanese 70's Classics" => ["Japan", "Tsukuba Circuit"],
            "American Championship" => ["United States", "Laguna Seca Raceway"],
            "Dream Car Championship" => ["Global", "High Speed Ring"],
            "British GT Car Cup" => ["United Kingdom", "Brands Hatch Circuit"],
            "German Touring Car Championship" => ["Germany", "Nürburgring Nordschleife"],
            "European Hot Hatch Championship" => ["Europe", "Autódromo do Estoril"],
            "Japanese Championship" => ["Japan", "Fuji Speedway"],
            "Polyphony Digital Cup" => ["Global", "Trial Mountain Circuit"],
            "Like The Wind" => ["Global", "Grand Valley Speedway"],
        ];

        $cupName = $faker->randomElement(array_keys($kupakOrszagok));
        $cupData = $kupakOrszagok[$cupName];

        $earliestDate = strtotime('2024-01-03');
        $latestDate = strtotime('2024-12-28');
        $startDate = date('Y-m-d', mt_rand($earliestDate, $latestDate));
        $endDate = date('Y-m-d', strtotime($startDate . ' +3 days'));


        $raceSeries = ['R1', 'R2', 'R3', 'R4', 'R5', 'R6', 'R7', 'R8', 'R9', 'R10', 'R11', 'R12', 'R13', 'R14', 'R15'];
        static $index = 0;

        return [
            "track_name" => $cupData[1],
            "Country_name" => $cupData[0],
            "start_date" => $startDate,
            "end_date" => $endDate,
            "laps" => $faker->numberBetween(1, 3),
            "cup_name" => $cupName,
            'race_series' => $raceSeries[$index++],
        ];
    }
}
