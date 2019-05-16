@extends('layouts.ownerLayout')
@section('content')
<section class="counters1 counters cid-r8XiyQ8ooY" id="counters1-1q">


    <div class="container align-center" style="color: #149ccc;">
        <h2 class="mbr-section-title mbr-fonts-style display-2">New Applicants</h2>
        <hr class="style-three">
    </div>

    <div class="container">
        {{-- <h3 class="mbr-section-subtitle mbr-fonts-style display-5">Request Screening Reports</h3> --}}
        {{-- {{dd($result1)}} --}}
        {{-- {{dd(count($result1))}} --}}
        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                @php
                    $c=0
                @endphp
                @if(count($result1)!=0)
                
                @foreach ($result1 as $i)
                   
                     {{-- {{dd($result1)}} --}}
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont fa-user fa"></span>
                        </div>
                        {{-- {{$i->tenant_id}} --}}
                        <div class="card-text">
                                <h3 class="mbr-content-title mbr-bold mbr-fonts-style display-7"><span style="font-weight: normal;"> <strong>{{$i->firstName}} {{$i->lastName}}</strong></span></h3>
                        <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7"><span style="font-weight: normal;">{{$i->street_number}}</span></h4>
                        
                        {{-- <a class="btn btn-sm btn-primary" href="{{ route('acceptTenant', ['id'=>$i->tenant_id]) }}">Accept
                            <span class="mbr-iconfont mbr-iconfont-btn "></span></a> 
                        <a class="btn btn-sm btn-primary" href="#">Reject
                            <span class="mbr-iconfont mbr-iconfont-btn "></span></a>  --}}
                        
                        {!!Form::open(['action'=> 'OwnersController@applicantAccept','method'=> 'POST'])!!}
                            <input type="hidden" name="tenantId" value="{{$i->tenant_id}}">
                        <input type="hidden" name="propertyId" value="{{$i->property_id}}">
                            <button type="submit" class="btn btn-sm btn-primary" value="{{$i->tenant_id}}" name="accept" id="accept">Accept
                                <span class="mbr-iconfont mbr-iconfont-btn "></span></button> 
                            <button type="submit" class="btn btn-sm btn-primary" value="reject">Reject
                                <span class="mbr-iconfont mbr-iconfont-btn "></span></button>
                        {!!Form::close()!!}

                        </div>
                    </div>
                </div>
                        @php
                            $c++
                        @endphp
                    
                        @if ($c%3==0)
                            </div>
                            <div class="media-container-row">
                            
                        @endif
                        
                    @endforeach
                    @else
                            <p>No item found</p>
                    @endif
                    
            </div>
        </div>
   </div>
</section>
@endsection