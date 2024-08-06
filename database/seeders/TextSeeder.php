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
                    'journey_Heading',
                    'journey_Text',
                    'journey_Summary',
                    'prefooter_Text',
                    'footer_Heading',
                    'Our_Favourite_Expert_Led_Tours_Img1_heading',
                    'Our_Favourite_Expert_Led_Tours_Img2_headding',
                    'Our_Favourite_Expert_Led_Tours_Img3_headding',
                    'Our_Favourite_Expert_Led_Tours_Img4_headding',
                    'Our_Favourite_Expert_Led_Tours_Img1_Content',
                    'Our_Favourite_Expert_Led_Tours_Img2_Content',
                    'Our_Favourite_Expert_Led_Tours_Img3_Content',
                    'Our_Favourite_Expert_Led_Tours_Img4_Content',
                ]
            ],
            [
                'page_id'=>Page::whereName('tour')->first('id')->id,
                'option' => [
                    'adventure_Text',
                    'note',
                    'highlights',
                    'trip_Text',
                    'itinerary',
                    'day1_2',
                    'day2_text',
                    'day3_4',
                    'day4_text',
                    'day5_7',
                    'day5_7_text',
                    'day8',
                    'day8_text',
                    'pre_footer',
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
