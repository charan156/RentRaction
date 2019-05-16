@extends('layouts.ownerLayout')
@section('content') 
<section class="features3 cid-r8XcehjGdq" id="features3-1n">
    <div class="container">
      
        <div class="row justify-content-left content-row">
            <div class="media-container-column title col-12 col-lg-7 col-md-7">
                <h2 class="mbr-section-title mbr-fonts-style display-2">Properties</h2>
      <hr class="style-three">
                   </div>
                    <div class="media-container-column justify-content-rightt col-12 col-lg-5 col-md-5">
                <div class="align-right"><a href="/propertyForm" data-caption="Notify" class=""><span class="fa fa-plus-square mbr-iconfont mbr-iconfont-btn" style="font-size: 41px;"></span></a> <hr class="style-three"></div>
               
            </div>
            <div class="media-container-row">
                @php
                     $count=0
                @endphp
               
            @if(count($results)>1)
            
            @foreach ($results as $item)
            <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                        <img src="{{asset('storage/uploads/'.$item->img)}}" alt="House Image" title="" height="200 px" width="100 px">
                        </div>
                        <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">{{$item->street_number}}</h4>
                        <p class="mbr-text mbr-fonts-style display-7">{{$item->zip_code.", ".$item->city.", ".$item->state}}</p>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="#" class="btn btn-primary display-4">Details</a></div>
                    </div>
                </div>
                @php
                     $count++
                @endphp
               
                @if ($count%3==0)
                </div>
                <div class="media-container-row">
                    
                @endif
                
            @endforeach
            @else
                    <p>No item found</p>
        @endif
        </div>
        
    </div>
</div></section>
@endsection