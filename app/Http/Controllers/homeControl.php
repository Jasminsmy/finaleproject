<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\proModel;
use App\Models\usersModel;

class homeControl extends Controller
{
    function index()
    {
        return view('home');
    }

    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            return view('admin.adminpage');
        }

        else
        {
            return view('homepage');
        }
    }

    function projectuser()
    {
        $user=Auth::user();
        $member=proModel::all();
        return view('staff.projectList',['data'=>$member, 'user'=>$user]);
    }

    function projectDetails()
    {
        $user=Auth::user();
        $members=usersModel::where('usertype','!=','1')->get();
        $data=DB::table('research')
            ->leftJoin('users', 'research.leader','=','users.leader')
            ->where('research.id','=',$id)->select('research.*')
            ->get()->first();
        return view('staff.updatePro',['data'=>$data, 'user'=>$user, 'staff'=>$members]);
    }

    function UPDATEresearch(Request $req)
    {
        $member=proModel::find($req->id);
        $member->title=$req->title;
        $member->leader=$req->leader;
        $member->type=$req->type;
        $member->name=$req->name;
        $member->startdate=$req->startdate;
        $member->enddate=$req->enddate;
        $member->duration=$req->duration;
        $member->cost=$req->cost;
        $member->client=$req->client;
        $member->stage=$req->stage;
        $member->status=$req->status;
        $member->save();

        return redirect()->back();
    }

    function staffHome()
    {
        return view('homepage');
    }
}
