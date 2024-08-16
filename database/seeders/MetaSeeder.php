<?php

namespace Database\Seeders;

use App\Models\MetaData;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                    'slider' => [
                        'heading',
                        'content',
                        'header_image'
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
                        'Img1_content',
                        'Img1_price',
                        'Img1_date1',
                        'Img1_date2',
                        'Img1_tag',
                        'Img2_heading',
                        'Img2_content',
                        'Img2_price',
                        'Img2_date1',
                        'Img2_date2',
                        'Img2_tag',
                        'Img3_heading',
                        'Img3_content',
                        'Img3_date1',
                        'Img3_date2',
                        'Img3_price',
                        'Img3_tag',
                        'Img4_heading',
                        'Img4_content',
                        'Img4_price',
                        'Img4_tag',
                        'Img4_date1',
                        'Img4_date2',
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
            [
                'page_id' => Page::whereName('tour')->first('id')->id,
                'option' => [
                    'slider'=>[
                        'header_image'
                    ],
                    'tour_highlights' => [
                        'tour_duration',
                        'tour_location',
                        'max_people',
                        'tour_dates',
                        'departure_locations',
                    ],
                    'form' => [
                        'tour_type',
                        'tour_price',
                    ],
                    'body_Navbar' => [
                        'menu_1',
                        'menu_2',
                        'menu_3',
                        'menu_4',
                    ],
                    'about'=>[
                        'adventure_heading',
                        'adventure_text',
                        'note',
                        'about_title',
                        'highlights_title',
                    ],
                    'highlights' => [
                        'highlight1',
                        'highlight2',
                        'highlight3',
                        'highlight4',
                        'highlight5',
                        'highlight6',
                    ],
                    'triphost'=>[
                        'name'
                    ],
                    'triphost_details'=>[
                        'triphost_detail_1',
                        'triphost_detail_2',
                        'triphost_detail_3',
                        'triphost_detail_4',
                        'triphost_detail_5',
                        'triphost_detail_6',
                        'triphost_detail_7'
                    ],
                    'mapImage'=> [
                        'image'
                    ],
                    'itinerary' =>[
                        [
                            'location',
                            'description',
                            'additional_info',
                            'accommodation_name',
                            'accommodation_image',
                            'accommodation_rating',
                            'accommodation_description',
                        ],
                        [
                            'location',
                            'description',
                            'additional_info',
                            'accommodation_name',
                            'accommodation_image',
                            'accommodation_rating',
                            'accommodation_description',
                        ],
                        [
                            'location',
                            'description',
                            'additional_info',
                            'accommodation_name',
                            'accommodation_image',
                            'accommodation_rating',
                            'accommodation_description',
                        ],
                        [
                            'location',
                            'description',
                            'additional_info',
                            'accommodation_name',
                            'accommodation_image',
                            'accommodation_rating',
                            'accommodation_description',
                        ]
                    ],
                    'images' => [
                        'main_image',
                        'caption'
                    ],
                    'included_details' => [
                        'included_detail_1',
                        'included_detail_2',
                        'included_detail_3',
                        'included_detail_4',
                        'included_detail_5',
                        'included_detail_6',
                        'included_detail_7',
                    ],
                    'excluded_details' => [
                        'excluded_detail_1',
                        'excluded_detail_2',
                        'excluded_detail_3',
                        'excluded_detail_4',
                        'excluded_detail_5',
                    ],
                    'tripCosts'=> [
                        'cost_per_person',
                        'single_supplement',
                    ],
                    'destinations'=>[
                        'destination1' => [
                            'name',
                            'image'
                        ],
                        'destination2' => [
                            'name',
                            'image'
                        ],
                        'destination3' => [
                            'name',
                            'image'
                        ],
                    ],
                    'tours'=>[
                        'tour1'=>[
                            'badge',
                            'title',
                            'image',
                            'description',
                            'price',
                            'date'
                        ],
                        'tour2'=>[
                            'badge',
                            'title',
                            'image',
                            'description',
                            'price',
                            'date'
                        ],
                        'tour3'=>[
                            'badge',
                            'image',
                            'title',
                            'description',
                            'price',
                            'date'
                        ],
                        'tour4'=>[
                            'badge',
                            'image',
                            'title',
                            'description',
                            'price',
                            'date'
                        ],
                    ],
                    'footer'=>[
                        'footer_title',
                        'footer_content'
                    ]
                ]
            ]
        ];
        MetaData::truncate();
        foreach ($raw as $row) {
            foreach ($row['option'] as $title => $section) {
                foreach($section as  $opt)
                {
                    if(is_array($opt))
                    {
                        foreach($opt as $n => $v)
                        {
                            MetaData::create([
                                'page_id' => $row['page_id'],
                                'option' => $v,
                                'section' => $n
                            ]);
                        }
                    } else {
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
}
