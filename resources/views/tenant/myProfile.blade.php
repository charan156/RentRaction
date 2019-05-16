@extends('layouts.tenantLayout')
@section('content') 
<div id="custom-html-3c" custom-code="true" data-rv-view="56">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@foreach ($result as $item)
{{-- {{dd($item->firstName)}} --}}

 
<div class="container emp-profile">
            <form method="post">
                  <h3 class="mbr-section-title align-center mbr-fonts-style">My Profile</h3>
        <hr class="style-three">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="">
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                        <h5>{{$item->firstName}} {{$item->lastName}}</h5>
                        <h6>Tenant</h6>    
                        
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Password</a>
                                </li>
                            </ul>
                        </div>
						
						<div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$item->firstName}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$item->lastName}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p>{{$item->email}}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>123-456-7890</p>
                                            </div>
                                        </div> --}}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Tenant</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>$item->street_number</p>
                                            </div>
                                        </div> --}}
                                
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Current Password*</label>
                                            </div>
                                            <div class="col-md-6">
                                                           <input type="password" name="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>New Password*</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" name="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Confirm Password*</label>
                                            </div>
                                            <div class="col-md-6">
                                 <input type="password" name="" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                            </div>
                                             <div class="col-md-6">
                                              <a class="btn btn-sm btn-primary" href=""><span class="mbr-iconfont-btn"></span>Save
                    </a>
                                                <a class="btn btn-sm btn-primary" href=""><span class="mbr-iconfont-btn"></span>Cancel
                    </a>
                                            </div>
                                        </div>
                             
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach

</form>           
</div></div>
 

@endsection