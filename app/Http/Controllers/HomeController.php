<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function nurseHire($nurse_id)
    {
        $user_id    =   auth()->user()->id;
        $nurse_update    =   DB::table('nurses')->where('user_id',$nurse_id)
            ->update([
                'status' => 'Pending', 
                'client_id' => $user_id,
                'count' => 1,
                ]);
        return redirect()->back();
    }
    public function index()
    {
        $id    =   auth()->user()->id;
        $user    =   User::find($id);       
        if ($user->role_id == 1) {
            return view('user-profile')->with([
                'user'   =>   $user,
            ]);
        } else {
            $nurseStatus   =   DB::table('nurses')->where(['user_id' => $id,'status' => 'Pending'])->select('status')->get();
            $userId   =   DB::table('nurses')->where('user_id', $id)->select('user_id')->get();
            $nurseStatusCount    =   $nurseStatus->count(); 
            // dd($clientId[0]->user_id);
            return view('frontend.nurse-profile')->with([
                'user'   =>   $user,
                'nurseStatusCount' => $nurseStatusCount,
                'userId' =>   $userId,
            ]);
        }
    }
    public function userNurseRequest($userId)
    {
        $userNurseRequests   =   DB::table('nurses')->where([
            'user_id' => $userId,
            'status'  => 'Pending'
            ])->get();
        return view('frontend.user-nurse-request',compact('userNurseRequests'));
    }
    public function userRequestAccept($acceptId)
    {
        $nurserequestAcceptUpdate = DB::table('nurses')->where('id',$acceptId)
        ->update([
            'status' => 'Accept',
            ]);  
        return redirect()->back()->with('message','You Accept Request successfully');
    }
}
