<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
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
                    'Card_Image1',
                    'Card_Heading1',
                    'Card_Body1',
                    'Card_Footer1',
                    'Card_Image2',
                    'Card_Heading2',
                    'Card_Body2',
                    'Card_Footer2',
                    'Card_Image3',
                    'Card_Heading3',
                    'Card_Body3',
                    'Card_Footer3',
                    'Card_Image4',
                    'Card_Heading4',
                    'Card_Body4',
                    'Card_Footer4',
                ]
             ]
         ];

        Card::truncate();
        foreach ($raw as $row) {
            foreach ($row['option'] as $opt) {
                Card::create(['page_id' => $row['page_id'], 'option' => $opt]);
            }
        }
    }
}
