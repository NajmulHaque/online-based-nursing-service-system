@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rental/index.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<style>
    .vehicle-type .active{background: rgb(236, 187, 33) !important; border: none !important; font-weight: bold}
</style>
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<style type="text/css">
    ul.navbar-nav.ml-auto {
        float: right;
    }
    .card-header a{ text-decoration: none}
    .vendor-profile {
        text-align: center;
    }

    .vendor-profile .vendor-bio img {
        width: 200px;
        border-radius: 50%;
    }

    .vendor-bio ul {
        list-style-type: none;
        display: inline-flex;
    }

    .vendor-bio ul li a {
        color: blue;
        font-size: 25px
    }

    .vendor-bio ul li a:hover {
        color: blue;
    }

    body {
        background-color: #eee
    }

    .tab-contents {
        background-color: rgb(230, 228, 228)
    }

    .nav-tabs .nav-link,
    .nav-tabs {
        border: none;
        color: black
    }

    .nav-tabs .nav-link:focus {
        border-bottom: 3px solid blue;
        font-weight: 700
    }

    .selected-tab {
        background-color: rgb(231, 234, 238)
    }

    .year {
        margin-left: 100px;
        font-size: 20px;
        font-weight: 700;
        padding-top: 10px
    }

    .vertical-progress {
        width: 2px;
        height: 250px
    }

    #small-font {
        font-size: 14px
    }

    #blue-background {
        background-color: rgb(233, 243, 245)
    }

    #dot1,
    #dot2,
    #dot3 {
        position: absolute;
        width: 20px;
        height: 20px;
        border: 5px solid #fff;
        border-radius: 50%;
        background: rgb(21, 90, 194)
    }

    #arrow {
        content: "";
        position: absolute;
        margin-left: -5px;
        border-width: 9px;
        border-style: solid;
        border-color: white transparent transparent transparent;
        transform: rotate(90deg)
    }

    #bluearrow {
        content: "";
        position: absolute;
        margin-left: -5px;
        border-width: 9px;
        border-style: solid;
        border-color: rgb(29, 99, 240) transparent transparent transparent;
        transform: rotate(90deg)
    }

    @media(min-width:992px) {
        #profile {
            width: 100px;
        }

        .h4 {
            font-weight: bolder
        }

        #border-right {
            border-right: 2px solid rgb(165, 165, 165)
        }

        #dot1 {
            left: 112px
        }

        #dot2 {
            left: 112px;
            bottom: 138px
        }

        #dot3 {
            left: 112px;
            bottom: 25px
        }

        #status1 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 245px
        }

        #status2 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 126px
        }

        #status3 {
            position: absolute;
            width: 300px;
            height: 50px;
            left: 150px;
            bottom: 15px
        }

        #arrow,
        #bluearrow {
            top: 31%;
            left: -4%
        }

        .view {
            height: 360px;
            margin-top: 5%
        }
    }

    .vehicles h1{
    text-align: center;text-transform: capitalize;font-size: 31px;letter-spacing: 3px;padding: 5%;font-weight: bold;color:#000;
}
.vehicles .vehicle-type a{
    width: 25%;margin: 0 4% 0 4%;padding: 1.5%;
    border: 3px solid #bdbaba;box-shadow: none;font-size: 18px;letter-spacing: 2px;color: #000 !important;
}
.vehicles-type-details{
    padding: 8% 0 8% 0;
}
.vehicles-type-details img{
    width: 75%;float: right;
}
.vehicles-type-details ul li{
    list-style-type: none;font-size: 16px;font-weight: bold;letter-spacing: 2px;
}
.vehicles-type-details ul h5{
    font-weight: bold; padding: 2% 0% 2% 0;font-size: 18px;
}
.vehicles-type-details p a{
    color: #000000a6; font-size: 16px; text-transform: capitalize; font-weight: 
    bold; letter-spacing: 2px; text-decoration: none;
}
.vehicles-type-details p a:hover{text-decoration: none;} 
table td{
    list-style-type: none;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 2px;
}
.navbar{ margin-bottom: 0}
.nurse-review{ border: 1px solid lightgray; padding: 10px 20px}
.nurse-review i {
    font-size: 25px;
    color: red;
}
.rating_submit_inner {
    display: block;
    direction: rtl;
    unicode-bidi: bidi-override;
    text-align: center;
}
.rating_submit_inner .star {
    display: none;
}
.rating_submit_inner label {
    color: lightgray;
    display: inline-block;
    font-size: 30px;
    margin: 0 -2px;
    transition: transform .15s ease;
    cursor: pointer;
}
.rating_submit_inner label:hover {
    transform: scale(1.35, 1.35);
}
.rating_submit_inner label:hover,
.rating_submit_inner label:hover ~ label {
    color: orange;
}
.rating_submit_inner .star:checked ~ label {
    color: orange;
}
.post_ratings .fa {
    color: #ff9800;
}
.post_ratings .fa.light {
    color: #d3d3d3;
}
</style>
@endsection
@section('content')
@forelse ($nurseDetails as $nurse)
<div class="container-fluid bg-white pt-5">
    @if (session()->has('message'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('message') }}
    </div>
@endif
    <div class="d-flex flex-md-row justify-content-around align-items-center">
        <div class="nurse-details">
                <img src="{{asset('images/frontend/landing/customer2.jpg')}}" alt="" class="rounded-circle" id="profile">
                <h5 style="font-weight: 900;" class="text-success">{{$nurse->name}}</h5>
                <div class="text-muted">Nurse</div>
                <div>
                    @if ($nurse->status != Null)
                        <a href="javascript:void()" class="btn btn-info mt-2" style="width: 90px;">{{$nurse->status}}</a>
                    @else
                        <a href="{{ route('nurse.hired', $nurse->id) }}" class="btn btn-info mt-2" style="width: 90px;">Hire</a>
                    @endif
                </div>
        </div>
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
                      {{-- https://meet.google.com/asc-ciue-yeg --}}
                    <div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div id="sub-notification" class="modal-content">
                                <div class="modal-body py-5">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                    <p>Thank you for Your Request. Your request is waiting for our nurse approval.</p>
                                    <p>Please wait some time or check back later.</p>
                                    @foreach ($userVideoRequestDetails as $videoRequest)
                                        <a href="{{$videoRequest->meet_link}}" target="_blank" type="button" class="btn btn-info">Meet Link</a>
                                    @endforeach
                                    <button type="button" class="btn btn-danger" id="submit" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vehicles">
        <div class="container-fluid">
            <h1>Personal Details</h1>
            <div class="row vehicle-type">
                <a id="car" type="button" class="btn btn-default">Basic Info</a>
                <a id="van" type="button"  class="btn btn-default active">Qualifications</a>
                <a id="bus" type="button" class="btn btn-default">Services</a>
            </div>
            <div class="vehicles-type-details">
               <div class="row car" style="display: none">
                   <div class="col-md-6 col-lg-6">
                       <img height="270px" src="{{asset('images/frontend/team-image3.jpg')}}" alt="">
                   </div>
                   <div class="col-md-6 col-lg-6">
                       <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>Nurse Id</td>
                                <td>{{$nurse->id}}</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>{{$nurse->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$nurse->email}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    {{$nurse->gender}}
                                </td>
                            </tr>
                            <tr>
                                <td>Approve Date</td>
                                <td>{{$nurse->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>
                   </div>
               </div>
                   <div class="row van">
                       <div class="col-md-5 col-lg-5 pt-5">
                           <img height="350px" src="{{asset('images/frontend/landing/service2.jpg')}}" alt="">
                       </div>
                       <div class="col-md-6 col-lg-6 pr-5">
                           <ul>
                               <h5>Qualifications</h5>
                               <li> - Graduate of an approved school of professional nursing</li>
                               <li> - Current licensed Registered Nurse in Dhaka</li>
                               <li> - One or more years of experience in clinical home health services, or equivalent</li>
                               <li> - Strong communication skills</li>
                               <li> - Demonstrated computer literacy</li>
                               <li> - Excellent problem-solving ability, organizational skills and capacity to work independently or as a team</li>
                           </ul>
                       </div>
                   </div>
                   <div class="row bus" style="display: none">
                       <div class="col-md-6 col-lg-6 pt-4">
                           <img src="{{asset('images/frontend/Antiinfectives.png')}}" alt="">
                       </div>
                       <div class="col-md-6 col-lg-6">
                            <ul>
                                <h5>Nurse & Info</h5>
                                <li> - IV Therapy / Injections</li>
                                <li> - Pain And Symptom Management</li>
                                <li> - Medication Management</li>
                                <li> - End Of Life / Palliative Care</li>
                                <li> - Footcare</li>
                                <li> - Occupational Therapy</li>
                                <li> - Ventilator Care</li>
                            </ul>
                       </div>
                   </div>
            </div>
        </div>
    </div>
</div>
@empty
    <div>Data not found</div>
@endforelse
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        @if (session()->has('video'))
            $("#centralModal").modal("toggle");
        @endif
        $('#car').on('click',function () {
            $('.car').show();
            $('.bus').hide();
            $('.van').hide();
            $(this).addClass('active');
            $("#van").removeClass('active');
            $("#bus").removeClass('active');
        });
        $('#van').on('click',function () {
            $('.car').hide();
            $('.bus').hide();
            $('.van').show();
            $("#van").addClass('active');
            $("#car").removeClass('active');
            $("#bus").removeClass('active');
        });
        $('#bus').on('click',function () {
            $('.car').hide();
            $('.bus').show();
            $('.van').hide();
            $("#bus").addClass('active');
            $("#car").removeClass('active');
            $("#van").removeClass('active');
        });
    });
</script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection