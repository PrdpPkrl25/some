<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {
        $files=File::orderby('id','asc')->with('files')->get();
        return view('file',['files'=>$files]);
    }

    public function store(Request $request)
    {
        $attr=
            [
                'file_id'=>$request->file_id,
                'file_type'=>$request->file_type,
                'file_size'=>$request->file_size,
                'path'=>$request->path,
            ];
        $result=File::create($attr);
        return redirect('/file');
    }
    public function file_view($id)
    {
        $fileDetail =File::findOrfail($id);
        $files=File::orderby('id','asc')->with('files')->get();
        return view('file.file_view',compact('fileDetail','files'));
    }
    public function file_edit($id)
    {

        $fileDetail =File::findOrfail($id);
        $files=File::orderby('id','asc')->with('files')->get();
        return view('file.file_edit',compact('fileDetail','files'));
    }
    public function file_editpost(Request $request,$id)
    {
        $attr=
            [

                'file_id'=>$request->file_id,
                'file_type'=>$request->file_type,
                'file_size'=>$request->file_size,
                'path'=>$request->path,
            ];
        $result=File::where('id',$id)->update($attr);
        return redirect('/file_view'.$id);
    }
}
