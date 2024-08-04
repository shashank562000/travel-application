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
                    'footerHeading'
                ]
            ],
            [
                'name'=> 'tour',
                'option'=> [
                    
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
