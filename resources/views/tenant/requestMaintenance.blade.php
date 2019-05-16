@extends('layouts.tenantLayout')
@section('content')

<section class="mbr-section form1 cid-r9xe0HsJpz" id="form1-2m">

    

    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2"><strong>Request Maintenance</strong></h2>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <div data-form-alert="" hidden="">
                         Maintenance Request Created Successfully !!!
                    </div>
            
                    <form class="mbr-form" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="1EiG19LwZTwQCuVRaaATwlevwmNyPE6RcYcB5JTgLO96ZjX+aOLBQrkE1S3Ijdgy8h4tgAE4cFGfnW8KhrdNKEe/Jb9xrJPo74Nx6sUsOLfp+uU3ZeqCiMxvlENNYHmw">
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7">Request Type</label>
                                      <select name="property" class="form-control selectpicker" id="property-form1-2m" data-form-field="">
                                              <option value="">Select...</option>
                                              <option>Electrical</option>
                                              <option>Appliance Repair</option>
                                              <option>HVAC- Heating and Cooling</option>
                                              <option>Pest Control</option>
                                              <option>Plumbing</option>
                                              <option>Cleaning</option>
                                              <option>Other</option>
                                             </select>
                                </div>
                            </div>
                        </div> 
                     
              
                       
                        <div class="row row-sm-offset">
                            <div class="col-md-12 multi-horizontal">
                                <div class="form-group">
                                 <label class="form-control-label mbr-fonts-style display-7">Request</label>
                                <input type="text" class="form-control" name="rent" data-form-field="Rent" id="rent-form1-2m">
                                
                                </div>
                       </div>
                    </div>
                         <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="message-form1-2m">Description</label>
                            <textarea type="text" class="form-control" name="message" rows="4" data-form-field="Message" id="message-form1-2m"></textarea>
                        </div>
                   
                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4">Request</button></span>
                    
            
            
                </form>       
        </div>
    </div>
</div></section>
@endsection