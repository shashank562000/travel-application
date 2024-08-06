<?php

namespace App\Http\Controllers;

use App\Models\{PageSetting,SiteContent,Page};
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index()
    {
        $allPages =  Page::with('texts','images','cards')->get();
        return view('admin.dashboard', compact('allPages'));
    }
}
