@extends('layouts.app')
@section('styles')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<style type="text/css">
    ul.navbar-nav.ml-auto {
        float: right;
    }
    .card-header a{ text-decoration: none}
    .vendor-profile {
        text-align: center;
    }
</style>
@endsection
@section('content')
    <div class="d-flex flex-md-row justify-content-around align-items-center">
  
        @if ($nurse->status == 'Hired' and auth()->user()->id == $nurse->client_id and $userNurseReviewCount == 0)
        <div class="rating_submit_inner">
            <form action="{{route('nurse_rating',$nurse->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <p>Your Rating</p>
                <input id="radio1" type="radio" name="rating" value="5" class="star"/>
                <label for="radio1">&#9733;</label>
                <input id="radio2" type="radio" name="rating" value="4" class="star"/>
                <label for="radio2">&#9733;</label>
                <input id="radio3" type="radio" name="rating" value="3" class="star"/>
                <label for="radio3">&#9733;</label>
                <input id="radio4" type="radio" name="rating" value="2" class="star"/>
                <label for="radio4">&#9733;</label>
                <input id="radio5" type="radio" name="rating" value="1" class="star"/>
                <label for="radio5">&#9733;</label><br>
                <button type="submit" class="btn btn-info mt-3">submit</button>
            </form>
        </div>    
        @endif
        <div class="rounded p-lg-2" id="blue-background">
            <div class="d-flex flex-md-row align-items-center">
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4">4 years</p>
                    <div class="text-muted" id="count">Personal Experience</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    <p class="h4">3</p>
                    <div class="text-muted" id="count">Job Done</div>
                </div>
                <div class="align-items-center px-lg-3 px-md-2 px-1" id="border-right">
                    @for ($i = 0; $i < 5; ++$i)
                      <i style="font-size: 25px; color: orange" 
                          class="fa fa-star{{$nurseReview == $i+.5 ? '-half':''}}{{$nurseReview<=$i ? '-o':''}}">
                      </i>
                    @endfor
                    <div class="text-muted text-center pt-3" id="count">
                        User Review<span class="font-weight-bold"> ({{$userReviewCount}})</span>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                    <p class="h5 font-weight-bold">Private Service</p>
                    <div class="text-muted" id="count">Job Category</div>
                </div>
                <div class="d-flex flex-column align-items-center px-lg-4 px-md-2 px-sm-1 px-2">
                      @if ($nurse->status == 'Hired' or $nurse->status == 'Pending' and auth()->user()->id == $nurse->client_id)
                        <a href="{{route('user_video_request',$nurse->id)}}" class="btn">
                            <i class="fa fa-video-camera pl-2" style="font-size: 35px;color: Red;border: 2px solid lightgray;padding: 5px"></i> 
                        </a>  
                      @endif

@endsection

@section('scripts')
@endsection