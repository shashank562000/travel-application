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
            'page_id'=> $pageID,
            'keys'=> Text::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::where('page_id',$pageID)->where('type','text')->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadTexts(Request $request)
    {
        $old = SiteContent::where('page_id',$request->page_id)->where('type','text');
            $data = $request->all();
            unset($data['_token']);
            unset($data['page_id']);
            if($old->exists())
            {
                $old->update(['data'=> $data]);
            } else {
                $data = [
                    'type' => 'text',
                    'data'=> $data,
                    'page_id'=> $request->page_id
                ];
                SiteContent::create($data);
            }
            session()->put('msg','Texts successfully updated!');
            return back()->with('old', $old->get());
    }
    public function cards($pageID){
        return view('admin.card', [
            'page_id'=> $pageID,
            'keys'=> Card::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::whereId($pageID)->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadCards(Request $request)
    {}
    public function images($pageID){
        return view('admin.image', [
            'page_id'=> $pageID,
            'keys'=> Image::where('page_id',$pageID)->where('type','image')->get(['id','option']),
            'answers'=> SiteContent::where('page_id',$pageID)->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function uploadImages(Request $request)
    {
        $filepaths = [];
        foreach($request->image as $imageName => $image)
        {
            $filePath = $image->storeAs('public/images', $image->getClientOriginalName());
            $filepaths[$imageName]=$filePath;
        }
        $old = SiteContent::where('page_id',$request->page_id)->where('type','image');
        if($old->exists())
        {
            $old->update(['data'=> $filepaths]);
        } else {
            $data = [
                'type' => 'image',
                'data'=> $filepaths,
                'page_id'=> $request->page_id
            ];
            SiteContent::create($data);
        }
        session()->put('msg','Images successfully updated!');
        return back()->with('old', $old->get());
    }
}
