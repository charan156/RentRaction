@extends('layouts.tenantLayout')
@section('content') 


   
    {{-- @foreach ($result as $item)
        {{dd($item->img)}} 
    @endforeach --}}

<section class="testimonials4 cid-r9SknRrvau" id="testimonials4-2w">

  

  <div class="container">
    <h2 class="mbr-section-title mbr-fonts-style display-2" style="color:#149ccc;">Property Details</h2>
    <hr class="style-three"></div>
  {{-- <div class="container">
    <h2 class="mbr-section-title mbr-fonts-style display-2" style="text-color:#149ccc;">Property Details</h2>
    <hr class="style-three">
    <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style mbr-white align-center display-5"></h3>
    <div class="col-md-10 testimonials-container"> 
       --}}

      
  <div class="testimonials-item">
        <div class="user row">
                @foreach ($result as $item)
                <div class="col-lg-4 col-md-4">
                        <div class="user_image">
                          <img src="{{asset('storage/uploads/'.$item->img)}}" width="300px">
                        </div>
                      </div>
                      <div class="testimonials-caption col-lg-8 col-md-8">
                        
                        <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                        <label> Address - {{$item->address2}}</label> 
                        </div>
                        <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                                  <label>Owner - {{$item->user_id}}</label>
                          </div>
                         <div class="user_name mbr-bold mbr-fonts-style align-left pt-3 display-7">
                                  <label> Rent - {{$item->rent}}</label>
                          </div>
                         
                          @if ($btn==0)
                          <span class="input-group-btn">
                                <a href="{{ route('apply', ['ownerId'=>$item->user_id,'tenantId'=>session('userId'),'propertyId'=>$item->id ]) }}" type="submit" style="float:right;" class="btn btn-primary btn-form display-4">Apply</a>
                           </span>
                          @else
                          <span class="input-group-btn">
                                <label style="float:right;" class="btn btn-warning btn-form display-4">Applied</label>
                           </span>
                          @endif
                        
                      </div>
            @endforeach
       
          </div> 
      </div></div>
</div></section>
@endsection