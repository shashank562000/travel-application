<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use App\Models\Text;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raw = [
           [
                'page_id' => Page::whereName('landing')->first('id')->id,
                'option'=>[
                    'journeyHeading',
                    'journeyText',
                    'journeySummary',
                    'prefooterText',
                    'footerHeading',
                    'OurFavouriteExpertLedToursImg1headding',
                    'OurFavouriteExpertLedToursImg2headding',
                    'OurFavouriteExpertLedToursImg3headding',
                    'OurFavouriteExpertLedToursImg4headding',
                    'OurFavouriteExpertLedToursImg1Content',
                    'OurFavouriteExpertLedToursImg2Content',
                    'OurFavouriteExpertLedToursImg3Content',
                    'OurFavouriteExpertLedToursImg4Content',
                ]
            ],
            [
                'page_id'=>Page::whereName('tour')->first('id')->id,
                'option' => [
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
            ]
        ];

        Text::truncate();
        foreach ($raw as $row) {
            foreach ($row['option'] as $opt) {
                Text::create(['page_id' => $row['page_id'], 'option' => $opt]);
            }
        }

    }
}
