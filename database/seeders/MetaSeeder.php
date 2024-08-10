<?php

namespace Database\Seeders;

use App\Models\MetaData;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $sections = [

        ];
        $raw = [
            [
                'page_id' => Page::whereName('landing')->first('id')->id,
                'option'=>[
                    'head' => [
                        'heading'
                    ],
                    'head_end' => [
                        'heading'
                    ],
                    'journey' => [
                        'journey_Heading',
                        'journey_Text',
                        'journey_Summary'
                    ],
                    'expert_led_tours' => [
                        'Img1_heading',
                        'Img1_tag',
                        'Img2_heading',
                        'Img2_tag',
                        'Img3_heading',
                        'Img3_tag',
                        'Img4_heading',
                        'Img4_tag',
                        'Image1',
                        'Image2',
                        'Image3',
                        'Image4',
                    ],
                    'highlights' => [
                        'highlight_1_heading',
                        'highlight_1_image',
                        'highlight_2_heading',
                        'highlight_2_image',
                        'highlight_3_heading',
                        'highlight_3_image',
                        'highlight_4_heading',
                        'highlight_4_image',
                    ],
                    'explore' => [
                        'heading',
                        'highlight',
                        'text'
                    ],
                    'month_images'=> [
                        'january_image',
                        'february_image',
                        'march_image',
                        'april_image',
                        'may_image',
                        'june_image',
                        'july_image',
                        'august_image',
                        'september_image',
                        'october_image',
                        'november_image',
                        'december_image',
                    ],
                    'footer' => [
                        'heading',
                        'text'
                    ]
                ]
            ],

        ];
        MetaData::truncate();
        foreach ($raw as $row) {
            foreach ($row['option'] as $title => $section) {
                foreach($section as  $opt)
                {
                    MetaData::create([
                        'page_id' => $row['page_id'],
                        'option' => $opt,
                        'section' => $title
                    ]);
                }
            }
        }
    }
}
