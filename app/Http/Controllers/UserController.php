<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::orderby('id','asc')->with('users')->get();
        return view('user',['users'=>$users]);
    }

    public function store(request $request)
    {
        $attr=
            [
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'address'=>$request->address,
                'mobile_no'=>$request->mobile_no,
                'date_of_birth'=>$request->date_of_birth,
                'age'=>$request->age,
                'gender'=>$request->gender,


            ];
        $result=User::create($attr);
        return redirect('/user');
    }
    public function user_view($id)
    {
        $userDetail =User::findOrfail($id);
        $users=User::orderby('id','asc')->with('user')->get();
        return view('user.user_view',compact('userDetail','users'));
    }
    public function user_edit($id)
    {

        $userDetail =User::findOrfail($id);
        $users=User::orderby('id','asc')->with('user')->get();
        return view('user.user_edit',compact('userDetail','users'));
    }
    public function file_editpost(Request $request,$id)
    {
        $attr=
            [

                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'address'=>$request->address,
                'mobile_no'=>$request->mobile_no,
                'date_of_birth'=>$request->date_of_birth,
                'age'=>$request->age,
                'gender'=>$request->gender,

            ];
        $result=User::where('id',$id)->update($attr);
        return redirect('/user_view'.$id);
    }

}
