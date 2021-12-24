<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\proModel;
use App\Models\usersModel;

class adminController extends Controller
{
    function project()
    {
        $member= proModel::all();
        return view('proList',['data'=>$member]);
    }

    function staffes()
    {
        $members=usersModel::all();
        return view("admin.staff",['data'=>$members]);
    }

    function deleteuser()
    {
        $members=usersModel::find($id);
        $data->delete();
        return redirect->back();
    }

    function adding()
    {
        return view('addresearch');
    }

    function backHome()
    {
        return view('admin.adminpage');
    }

    function AddRes(Request $req)
    {
        $member = new proModel;
        $member->id=$req->id;
        $member->title=$req->title;
        $member->leader=$req->leader;
        $member->type=$req->type;
        $member->save();

        return redirect()->back();
    }
}
