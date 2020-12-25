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
        $user    =   auth()->user();       
        if ($user->role_id == 1) {
            return view('frontend.user-profile')->with([
                'user'   =>   $user,
            ]);
        } else{
            $nurseStatus   =   DB::table('nurses')->where(['user_id' => $id,'status' => 'Pending'])->select('status')->get();
            $clientId   =   DB::table('nurses')->where('user_id', $id)->select('client_id')->get();
            $nurseStatusCount    =   $nurseStatus->count(); 
            return view('frontend.nurse-profile')->with([
                'user'   =>   $user,
                'nurseStatusCount' => $nurseStatusCount,
                'clientId' =>   $clientId,
            ]);
        }
    }
    public function userNurseRequest($clientId)
    {
        $userNurseRequestDetails   =   User::join('nurses','nurses.client_id','users.id')->where([
            'nurses.client_id' => $clientId,
            'nurses.status'  => 'Pending'
            ])->select('users.*','nurses.status','nurses.id as request_id')->get();
        return view('frontend.user-nurse-request',compact('userNurseRequestDetails'));
    }
    public function userRequestAccept($requestId)
    {
        $nurserequestAcceptUpdate = DB::table('nurses')->where('id',$requestId)
        ->update([
            'status' => 'Hired',
            ]);  
        return redirect()->back()->with('message','You Accept Request successfully');
    }
}
