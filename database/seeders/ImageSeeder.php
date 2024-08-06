<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{Page,Image};
class ImageSeeder extends Seeder
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
                    'Card_image1',
                    'Card_image2',
                    'Card_image3',
                    'Card_image4',
                    'Grid_Image1',
                    'Grid_Image2',
                    'Grid_Image3',
                    'Grid_Image4',
                    'Grid_Image5',
                    'Grid_Image6',
                    'Grid_Image7',
                    'Grid_Image8',
                    'Grid_Image9',
                    'Grid_Image10',
                    'Grid_Image11',
                    'Grid_Image12',
                ]
             ]
         ];

        Image::truncate();
        foreach ($raw as $row) {
            foreach ($row['option'] as $opt) {
                Image::create(['page_id' => $row['page_id'], 'option' => $opt]);
            }
        }
    }
}
