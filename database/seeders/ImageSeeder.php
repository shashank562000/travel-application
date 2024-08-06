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
                    'Cardimage1',
                    'Cardimage2',
                    'Cardimage3',
                    'Cardimage4',
                    'GridImage1',
                    'GridImage2',
                    'GridImage3',
                    'GridImage4',
                    'GridImage5',
                    'GridImage6',
                    'GridImage7',
                    'GridImage8',
                    'GridImage9',
                    'GridImage10',
                    'GridImage11',
                    'GridImage12',
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
