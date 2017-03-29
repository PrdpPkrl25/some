<?php

namespace App\Http\Controllers;

use App\Gunaso;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags=Tag::orderby('id','asc')->with('tag')->get();
        $gunasos=Gunaso::orderBy('id','asc')->get();
        return view('authority',compact('tags','gunasos'));
    }

    public function store(Request $request)
    {
        $attr=
            [
                'tag_name'=>$request->authority_name,
                'gunaso_id'=>$request->gunaso_id,


            ];
        $result=Tag::create($attr);
        return redirect('/tag');
    }
    public function tag_view($id)
    {
        $tagDetail = Tag::findOrfail($id);
        $tags = Tag::orderby('id', 'asc')->with('tag')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        return view('tag.tag_view', compact('tagDetail','tags','gunasos'));
    }
    public function tag_edit($id)
    {
        $tagDetail = Tag::findOrfail($id);
        $tags = Tag::orderby('id', 'asc')->with('tags')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        return view('tag.tag_edit', compact('tagDetail','tags','gunasos'));
    }
    public function authority_editpost(request $request,$id)
    {
        $attr=
            [
                'tag_name'=>$request->authority_name,
                'gunaso_id'=>$request->gunaso_id,

            ];
        $result=Tag::where('id',$id)->update($attr);
        return redirect('/tag_view'.$id);
    }

}
