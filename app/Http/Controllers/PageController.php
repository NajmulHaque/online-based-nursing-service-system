<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Null_;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.landing');
    }
    public function circular()
    {
        $nurseDetails   =   User::join('nurses','nurses.user_id','users.id')
            ->where([
                'users.role_id' => 2,
                ])->whereNotNull('users.approved_at')
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
    public function nurseProfile($userId)
    {
        $userVideoRequestDetails   =   DB::table('nurses')->where([
            'user_id'   => $userId,
            'nurses.client_id' => auth()->user()->id,
            'nurses.video_Request'  => 'requested'
            ])->select('nurses.meet_link')->get();
        $nurseDetails   =   User::join('nurses','nurses.user_id','users.id')
            ->where(['users.id' => $userId])
            ->select('users.*','nurses.status','nurses.client_id')->get();
        $nurseReview    =   DB::table('nurse_reviews')->where('nurse_id',$userId)->avg('rating');
        $userReviewCount    =   DB::table('nurse_reviews')->where('nurse_id',$userId)->count();
        $userNurseReviewCount    =   DB::table('nurse_reviews')->where([
            'nurse_id'  => $userId,
            'user_id' => auth()->user()->id,
            ])->count();
        return view('frontend.nurse-dashboard')->with([
            'nurseDetails' => $nurseDetails,
            'userVideoRequestDetails' => $userVideoRequestDetails,
            'nurseReview'   =>  $nurseReview,
            'userReviewCount'   =>  $userReviewCount,
            'userNurseReviewCount' => $userNurseReviewCount,
        ]);
    }
}
