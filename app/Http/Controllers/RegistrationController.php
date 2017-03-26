<?php

namespace App\Http\Controllers;

use App\Registration;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations=Registration::orderby('id','asc')->with('registration')->get();
        $users=User::orderBy('id','asc')->get();
        return view('registration',compact('registrations','users'));
    }

    public function store(Request $request)
    {
        $attr=
            [
                'user_id'=>$request->user_id,

            ];
        $result=Registration::create($attr);
        return redirect('/comment');
    }
    public function registration_view($id)
    {
        $registrationDetail = Registration::findOrfail($id);
        $registrations=Registration::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('registration',compact('registrations','registrationDetail','users'));
    }
    public function registration_edit($id)
    {
        $registrationDetail = Registration::findOrfail($id);
        $registrations=Registration::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('registration',compact('registrations','registrationDetail','users'));
    }
    public function registration_editpost(Request $request,$id)
    {
        $attr=
            [
                'user_id'=>$request->user_id,

            ];
        $result=Registration::where('id',$id)->update($attr);
        return redirect('/registration_view'.$id);
    }

}

