<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.landing');
    }
    public function circular()
    {
        $nurseDetails   =   User::join('nurses','nurses.user_id','users.id')
            ->where(['users.role_id' => 2])
            ->select('users.*','nurses.status')->get();
        return view('frontend.circular-feed')->with([
            'nurseDetails'  =>  $nurseDetails,
        ]);
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function nurseProfile($nurseId)
    {
        $nurse    =   User::find($nurseId);
        $nurseStatus    =   DB::table('nurses')->where('user_id',$nurseId) ->get();
        $nurseStatusCount   =   $nurseStatus->count();
        return view('frontend.nurse-dashboard')->with([
            'nurse' => $nurse,
            'nurseStatusCount'   =>  $nurseStatusCount,
        ]);
    }
}
