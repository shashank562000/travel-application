<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raw=[
            ['name'=>'landing'],
            ['name'=>'tour'],
            ['name'=>'booking'],
            ['name'=>'hiking'],
        ];
        Page::truncate();
        foreach ($raw as $row) {
            Page::create($row);
        }
    }
}
