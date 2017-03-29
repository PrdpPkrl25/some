<?php

namespace App\Http\Controllers;

use App\Authority;
use App\Follow_up;
use Illuminate\Http\Request;

class Follow_upController extends Controller
{
    public function index()
    {
        $followups=Follow_up::orderby('id','asc')->with('follow_ups')->get();
        $authorities=Authority::orderBy('id','asc')->get();
        return view('followup',compact('authorities','followups'));
    }

    public function store(Request $request)
    {
        $attr=
            [
                'authority_id'=>$request->authority_id,
                'gunaso_date'=>$request->gunaso_date,


            ];
        $result=Follow_up::create($attr);
        return redirect('/followup');
    }
    public function followup_view($id)
    {
        $followupDetail = Follow_up::findOrfail($id);
        $followups=Follow_up::orderby('id','asc')->with('follow_ups')->get();
        $authorities=Authority::orderBy('id','asc')->get();
        return view('followup.followup_view',compact('authorities','followups','followupDetail'));
    }
    public function followup_edit($id)
    {
        $followupDetail = Follow_up::findOrfail($id);
        $followups = Follow_up::orderby('id', 'asc')->with('follow_ups')->get();
        $authorities = Authority::orderBy('id', 'asc')->get();
        return view('followup.followup_edit', compact('authorities', 'followups', 'followupDetail'));
    }
    public function followup_editpost(Request $request,$id)
    {
        $attr=
            [
                'authority_id'=>$request->authority_id,
                'gunaso_date'=>$request->gunaso_date,

            ];
        $result=Follow_up::where('id',$id)->update($attr);
        return redirect('/followup_view'.$id);
    }
}
