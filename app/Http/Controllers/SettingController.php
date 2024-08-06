<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSetting;
use App\Models\SiteContent;
use App\Models\Text;

class SettingController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.settings.index', compact('pages'));
    }

    public function create(Request $req)
    {
        try {
            $old = SiteContent::whereName($req->name);
            $data = $req->all();
            unset($data['_token']);
            unset($data['name']);
            if($old->exists())
            {
                $old->update(['data'=>json_encode($data)]);
            } else {
                $data = [
                    'name'=> $req->name,
                    'data'=> json_encode($data)
                ];
                SiteContent::create($data);
            }
            return [ 'status'=> true ];
        } catch (\Throwable $th) {
            return [ 'status'=> false , 'message'=>$th->getMessage() ];
        }
    }
    public function texts($pageID){
        return view('admin.text', [
            'keys'=> Text::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::whereId($pageID)->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadTexts(Request $request)
    {
        dd($request->all());
        $old = SiteContent::where('page_id',$request->page_id);
            $data = $request->all();
            unset($data['_token']);
            unset($data['page_id']);
            if($old->exists())
            {
                $old->update(['data'=>json_encode($data)]);
            } else {
                $data = [
                    'page_id'=> $request->page_id,
                    'data'=> json_encode($data)
                ];
                SiteContent::create($data);
            }
            return [ 'status'=> true ];
    }
    public function cards($pageID){
        return view('admin.card', [
            'keys'=> Card::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::whereId($pageID)->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadCards(Request $request)
    {}
    public function images($pageID){
        return view('admin.image', [
            'keys'=> Image::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::whereId($pageID)->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadImages(Request $request)
    {}
}
