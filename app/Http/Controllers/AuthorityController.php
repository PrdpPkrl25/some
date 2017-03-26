<?php

namespace App\Http\Controllers;

use App\Gunaso;
use Illuminate\Http\Request;
use App\Authority;

class AuthorityController extends Controller
{
    public function index()
    {
        $authorities=Authority::orderby('id','asc')->with('authority')->get();
        $gunasos=Gunaso::orderBy('id','asc')->get();
        return view('authority',compact('authorities','gunasos'));
    }

    public function store(Request $request)
    {
        $attr=
        [
            'authority_name'=>$request->authority_name,
            'gunaso_id'=>$request->gunaso_id,


            ];
        $result=Authority::create($attr);
        return redirect('/authority');
    }
    public function authority_view($id)
    {
        $authorityDetail = Authority::findOrfail($id);
        $authorities = Authority::orderby('id', 'asc')->with('authority')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        return view('Authority.authority_view', compact('authorityDetail', 'authorities','gunasos'));
    }
    public function authority_edit($id)
    {
        $authorityDetail = Authority::findOrfail($id);
        $authorities = Authority::orderby('id', 'asc')->with('authority')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        return view('Authority.authority_edit', compact('authorityDetail', 'authorities','gunasos'));
    }
    public function authority_editpost(request $request,$id)
    {
        $attr=
            [
                'authority_name'=>$request->authority_name,
                'gunaso_id'=>$request->gunaso_id,
            ];
        $result=Authority::where('id',$id)->update($attr);
        return redirect('/authority_view'.$id);
    }
}
