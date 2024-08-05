<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageSetting;

class PageSettings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raw = [
            [
                'name'=> 'landing',
                'option'=> [
                    'journeyHeading',
                    'journeyText',
                    'journeySummary',
                    'prefooterText',
                    'footerHeading',
                    json_encode(['cards'=>4]),
                    json_encode(['images'=>12]),
                ]
            ],
            [
                'name'=> 'tour',
                'option'=> [
                    'adventureText',
                    'note',
                    'highlights',
                    'tripText',
                    'itinerary',
                    'day1_2',
                    'day2_text',
                    'day3_4',
                    'day4_text',
                    'day5_7',
                    'day5_7_text',
                    'day8',
                    'day8_text',
                    'prefooter',
                ]
            ],
            [
                'name'=> 'booking',
                'option'=> [

                ]
            ],
            [
                'name'=> 'hiking',
                'option'=> [

                ]
            ],
        ];
        PageSetting::truncate();
        foreach ($raw as $row) {
            if(count($row['option'])===0)
            {
                continue;
            }
            foreach ($row['option'] as $opt) {
                PageSetting::create(['name'=> $row['name'], 'option'=>$opt ]);
            }
        }
    }
}
