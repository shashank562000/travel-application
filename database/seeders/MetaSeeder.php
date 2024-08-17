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
                        'header_image',
                        'header_video'
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
                    'itinerary_section_1' => [
                        'location_1',
                        'description_1',
                        'additional_info_1',
                        'accommodation_name_1',
                        'accommodation_image_1',
                        'accommodation_rating_1',
                        'accommodation_description_1',
                    ],
                    'itinerary_section_2' => [
                        'location_2',
                        'description_2',
                        'additional_info_2',
                        'accommodation_name_2',
                        'accommodation_image_2',
                        'accommodation_rating_2',
                        'accommodation_description_2',
                    ],
                    'itinerary_section_3' => [
                        'location_3',
                        'description_3',
                        'additional_info_3',
                        'accommodation_name_3',
                        'accommodation_image_3',
                        'accommodation_rating_3',
                        'accommodation_description_3',
                    ],
                    'itinerary_section_4' => [
                        'location_4',
                        'description_4',
                        'additional_info_4',
                        'accommodation_name_4',
                        'accommodation_image_4',
                        'accommodation_rating_4',
                        'accommodation_description_4',
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

                    'destination1' => [
                        'name_1',
                        'image_1'
                    ],
                    'destination2' => [
                        'name_2',
                        'image_2'
                    ],
                    'destination3' => [
                        'name_3',
                        'image_3'
                    ],

                    'tour1'=>[
                        'badge_1',
                        'title_1',
                        'image_1',
                        'description_1',
                        'price_1',
                        'date_1'
                    ],
                    'tour2'=>[
                        'badge_2',
                        'title_2',
                        'image_2',
                        'description_2',
                        'price_2',
                        'date_2'
                    ],
                    'tour3'=>[
                        'badge_3',
                        'image_3',
                        'title_3',
                        'description_3',
                        'price_3',
                        'date_3'
                    ],
                    'tour4'=>[
                        'badge_4',
                        'image_4',
                        'title_4',
                        'description_4',
                        'price_4',
                        'date_4'
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
