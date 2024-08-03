<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\HeroHome;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function edithomepageherosection(Request $request){
        $homehere = HeroHome::find(id:1);
        $homehere->image = $request->image;
        $homehere->heading_first = $request->heading_first;
        $homehere->heading_second = $request->heading_second;
        $homehere->heading_third = $request->heading_third;
        $homehere->heading_forth = $request->heading_forth;
        $homehere->heading_fiveth = $request->heading_fiveth;
        $homehere->redadmore_url = $request->redadmore_url;
        $homehere->save();
    }


    public function edithomepageFavourite(Request $request){
        
    }
}
