<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gunaso;

class GunasoController extends Controller
{
    public function index()
    {
        $gunasos=Gunaso::orderby('id','asc')->with('gunaso')->get();
        $users=User::orderBy('id','asc')->get();
        return view('gunaso',compact('gunasos','users'));
    }

    public function store(request $request)
    {
        $attr=
            [
                'user_id'=>$request->user_id,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'topic'=>$request->topic,
                'heading'=>$request->heading,
                'discription'=>$request->discription,


            ];
        $result=Gunaso::create($attr);
        return redirect('/gunaso');
    }
    public function gunaso_view($id)
    {
        $gunasoDetail = Gunaso::findOrfail($id);
        $gunasos = Gunaso::orderby('id', 'asc')->with('gunaso')->get();
        $users=User::orderBy('id','asc')->get();
        return view('gunaso.gunaso_view', compact('gunasoDetail', 'gunasos','users'));
    }
    public function gunaso_edit($id)
    {
        $gunasoDetail = Gunaso::findOrfail($id);
        $gunasos = Gunaso::orderby('id', 'asc')->with('gunaso')->get();
        $users=User::orderBy('id','asc')->get();
        return view('gunaso.gunaso_edit', compact('gunasoDetail', 'gunasos','users'));
    }
    public function gunaso_editpost(request $request,$id)
    {
        $attr=
            [
                'user_id'=>$request->user_id,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'topic'=>$request->topic,
                'heading'=>$request->heading,
                'discription'=>$request->discription,
            ];
        $result=Gunaso::where('id',$id)->update($attr);
        return redirect('/gunaso_view'.$id);
    }


}
