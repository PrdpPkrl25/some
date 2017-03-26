<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Gunaso;
use App\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments=Comment::orderby('id','asc')->with('comment')->get();
        $gunasos=Gunaso::orderBy('id','asc')->get();
        $files=File::orderBy('id','asc')->get();
        $infos=Info::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('authority',compact('comments','gunasos','files','infos','users'));
    }

    public function store(Request $request)
    {
        $attr=
            [
                'gunaso_id'=>$request->gunaso_id,
                'file_id'=>$request->file_id,
                'info_id'=>$request->info_id,
                'user_id'=>$request->user_id,
                'discription'=>$request->discription,


            ];
        $result=Comment::create($attr);
        return redirect('/comment');
    }
    public function comment_view($id)
    {
        $commentDetail = Comment::findOrfail($id);
        $comments = Comment::orderby('id', 'asc')->with('comment')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        $files=File::orderBy('id','asc')->get();
        $infos=Info::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('comment.comment_view', compact('commentDetail', 'comments','gunasos','files','infos','users'));
    }
    public function comment_edit($id)
    {
        $commentDetail = Comment::findOrfail($id);
        $comments = Comment::orderby('id', 'asc')->with('comment')->get();
        $gunasos = Gunaso::orderBy('id', 'asc')->get();
        $files=File::orderBy('id','asc')->get();
        $infos=Info::orderBy('id','asc')->get();
        $users=User::orderBy('id','asc')->get();
        return view('comment.comment_view', compact('commentDetail', 'comments','gunasos','files','infos','users'));
    }
    public function comment_editpost(request $request,$id)
    {
        $attr=
            [
                'gunaso_id'=>$request->gunaso_id,
                'file_id'=>$request->file_id,
                'info_id'=>$request->info_id,
                'user_id'=>$request->user_id,
                'discription'=>$request->discription,
            ];
        $result=Comment::where('id',$id)->update($attr);
        return redirect('/comment_view'.$id);
    }
}
