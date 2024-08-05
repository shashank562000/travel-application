<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageSetting;

class DataController extends Controller
{
    public function info($page):\Illuminate\Database\Eloquent\Collection
    {
        return PageSetting::whereName($page)->get();
    }
}
