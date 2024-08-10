<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Content;
use App\Models\Image;
use App\Models\MetaContent;
use App\Models\MetaData;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageSetting;
use App\Models\SiteContent;
use App\Models\Text;
use Illuminate\Support\Facades\DB;

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
            'pageName'=> Page::find($pageID)->name,
            'keys'=> Text::where('page_id',$pageID)->get(['id','option']),
            'answers'=> SiteContent::where('page_id',$pageID)->where('type','text')->first('data'),
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }
    public function template($pageID)
    {
        $keys=[];
        foreach(DB::table('meta_contents')->where('page_id',1)->get(['section','option']) as $dataset)
        {
            $keys[$dataset->section][] = $dataset->option;
        }
        $answers=new \stdClass();
        $data =  MetaData::where('page_id',$pageID)->get(['option','value','section']);
        foreach($data as $row)
        {
            $section = new \stdClass();
            $section->{$row->option} = $row->value;
            $answers->{$row->section} = $section;
        }
        return view('admin.pages.template', [
            'page_id'=> $pageID,
            'pageName'=> Page::find($pageID)->name,
            'keys'=> $keys, // Content Key
            'answers'=> $answers,
            'allPages'=> Page::with('texts','images','cards')->get()
        ]);
    }

    public function updateTemplate(Request $req)
    {
        $pageID = $req->page_id;
        $postData = $req->all();
        unset($postData['_token']);
        unset($postData['page_id']);
        foreach($postData as $name => $input)
        {
            list($section, $name) = explode('**',$name);
            $row = MetaData::where('page_id', $pageID);
            if(str_contains(strtolower($name), 'image'))
            {
                $image = $input;
                $filePath = $image->storeAs('public/images', $image->getClientOriginalName());
                // dd($filePath);
                $row->where('option', $name)->where('section', $section)->update(['value'=> json_encode($filePath)]);
            } else {
                $row->where('option', $name)->where('section', $section)->update(['value' => $input ]);
            }
        }
        session()->put('msg','Data successfully updated!');
        return back();
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
            'pageName'=> Page::find($pageID)->name,
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
            'pageName'=> Page::find($pageID)->name,
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
