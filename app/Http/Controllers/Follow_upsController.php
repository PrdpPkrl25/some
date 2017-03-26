<?php

namespace App\Http\Controllers;

use App\Authority;
use App\FollowUps;
use Illuminate\Http\Request;

class Follow_upsController extends Controller
{
    public function index()
    {
        $followups=FollowUps::orderby('id','asc')->with('follow_ups')->get();
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
        $result=FollowUps::create($attr);
        return redirect('/followup');
    }
    public function followup_view($id)
    {
        $followupDetail = FollowUps::findOrfail($id);
        $followups=FollowUps::orderby('id','asc')->with('follow_ups')->get();
        $authorities=Authority::orderBy('id','asc')->get();
        return view('followup.followup_view',compact('authorities','followups','followupDetail'));
    }
    public function followup_edit($id)
    {
        $followupDetail = FollowUps::findOrfail($id);
        $followups = FollowUps::orderby('id', 'asc')->with('follow_ups')->get();
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
        $result=FollowUps::where('id',$id)->update($attr);
        return redirect('/followup_view'.$id);
    }
}
