<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = Config::get('constants.activities');
        for($i=0;$i<count($activities);$i++){
            $activity = $activities['activity_'.($i+1)];
            DB::table('activity')->insert([
                'title' => $activity['title'],
                'description' => $activity['description'],
                'price' => $activity['price'],
                'start_date' => $activity['start_date'],
                'end_date' => $activity['end_date'],
                'popularity' => $activity['popularity'],
            ]);
        }
        
    }
}
