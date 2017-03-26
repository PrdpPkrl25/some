<?php

namespace App\Http\Controllers;

use App\Gunaso;
use App\Info;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class InfoController extends Controller
{
    public function index()
    {
        $infos=Info::orderby('id','asc')->with('info')->get();
        $gunasos=Gunaso::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('info',compact('gunasos','infos','users'));
    }

    public function store(Request $request)
    {
        $attr=
            [
                'user_id'=>$request->user_id,
                'gunaso_id'=>$request->gunaso_id,
                'discription'=>$request->discription,


            ];
        $result=Info::create($attr);
        return redirect('/comment');
    }
    public function comment_view($id)
    {
        $infoDetail = Info::findOrfail($id);
        $infos=Info::orderBy('id','asc')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('info.info_view', compact('infoDetail','gunasos','infos','users'));
    }
    public function comment_edit($id)
    {
        $infoDetail = Info::findOrfail($id);
        $infos=Info::orderBy('id','asc')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('info.info_view', compact('infoDetail','gunasos','infos','users'));
    }
    public function comment_editpost(Request $request,$id)
    {
        $attr=
            [
                'user_id'=>$request->user_id,
                'gunaso_id'=>$request->gunaso_id,
                'discription'=>$request->discription,

            ];
        $result=Info::where('id',$id)->update($attr);
        return redirect('/info_view'.$id);
    }


}
