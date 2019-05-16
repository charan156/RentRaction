@extends('layouts.homeLayout')
@section('content')
{{--
<div class="jumbotron text-center" style="margin:10px">
    <h1>Hello, {{session('userId')}} ,{{session('userName')}}</h1>
    {!!Form::open(['action'=> 'ChattingController@index','method'=> 'POST'])!!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="hiddenValue1" value="{{$userId}}" >
    <input type="hidden" name="hiddenValue2" value="{{$userName}}" >
    <div class="form-group">
        <input type="submit" name="chatting" class="btn btn-primary btn-lg" value="Chatting" />
    </div>
    {!!Form::close()!!}
</div>--}}
<section class="features8 cid-r8WOq1wAvO mbr-parallax-background" style="background-color:#ffffff;" id="features8-18">

    

        <div class="mbr-overlay" style="background-color: rgb(255, 255, 255);">
        </div>
    
        <div class="container">
            <div class="media-container-row">
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbr-iconfont icon54-v4-building"></span>
                    </div>
                    <div class="card-box align-center">
                 
                        <div class="mbr-section-btn text-center"><a href="/viewProperty" class="btn btn-black display-4">
                            Properties
                            </a></div>
                    </div>
                </div>
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbr-iconfont mbri-cash"></span>
                    </div>
                    <div class="card-box align-center">
           
                        <div class="mbr-section-btn text-center"><a href="/payments" class="btn btn-black display-4">
                                Payments
                            </a></div>
                    </div>
                </div>
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbri-responsive fa-user fa"></span>
                    </div>
                    <div class="card-box align-center">
                        <div class="mbr-section-btn text-center"><a href="/applicant" class="btn btn-black display-4">
                                Applicants
                            </a></div>
                    </div>
                </div>
    
            </div>
        </div> 
    </section>
    
    <section class="features8 cid-r8WPJd2v9p" style="background-color:#ffffff;" id="features8-19">
    
        
    
        <div class="mbr-overlay" style="background-color: rgb(255, 255, 255);">
        </div>
    
        <div class="container">
            <div class="media-container-row">
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbr-iconfont icon54-v1-tools"></span>
                    </div>
                    <div class="card-box align-center">
                       <div class="mbr-section-btn text-center"><a href="/maintenance" class="btn btn-black display-4">
                                Maintenance
                            </a></div>
                    </div>
                </div>
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbr-iconfont mbri-edit"></span>
                    </div>
                    <div class="card-box align-center">
                 
       <div class="mbr-section-btn text-center"><a href="/expenses" class="btn btn-black display-4">
                                Expenses
                            </a></div>
                    </div>
                </div>
    
                <div class="card  col-12 col-md-6 col-lg-4">
                    <div class="card-img">
                        <span class="mbr-iconfont icon54-v1-chat-2"></span>
                    </div>
                    <div class="card-box align-center">
                        <div class="mbr-section-btn text-center"><a href="/chatting" class="btn btn-black display-4">
                                Chat
                            </a></div>
                    </div>
                </div>
    
            </div>
        </div>
    </section>
@endsection