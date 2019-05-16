@extends('layouts.ownerLayout')
@section('content')
<section class="test">
             {{--   {!!Form::open(['action'=> 'OwnersController@addProperty','method'=>'POST'])!!}
                       
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="text" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                {!!Form::close()!!}
                --}}
                                    <div data-form-alert="" hidden="">
                                         Property Added Successfully !!!
                                    </div>
                                    {!!Form::open(['action'=> 'OwnersController@addProperty','method'=>'POST','files'=>'true','enctype'=>'multipart/form-data'])!!}
                                       
                                  
                                    <div class="row row-sm-offset">
                                            <div class="col-md-12 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">Property Type</label>
                                                      <select name="property" class="form-control selectpicker" id="property-form1-2g" data-form-field="">
                                                              <option >Select...</option>
                                                              <option value="Apartment">Apartment</option>
                                                              <option value="Single Family House">Single Family House</option>
                                                              <option value="Duplex/Triplex/Townhouse">Duplex/Triplex/Townhouse</option>
                                                              <option value="Mobile/Manufactured Home">Mobile/Manufactured Home</option>
                                                              <option value="Dormitory">Dormitory</option>
                                                              <option value="Commercial">Commercial</option>
                                                              <option value="MCR">MCR</option>
                                                              <option value="Mayor's Office">Mayor's Office</option>
                                                              <option value="Tourism Office">Tourism Office</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                     
                                        <div class="row row-sm-offset">
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">Street Number</label>
                                                    <input type="text" class="form-control" name="streetnumber" data-form-field="StreetName" required="" id="streetname-form1-2g">
                                                </div>
                                            </div>
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">Street Name</label>
                                                    <input type="text" class="form-control" name="streetname" data-form-field="StreetName" required="" id="streetname-form1-2g">
                                                </div>
                                            </div>
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">Address2</label>
                                                    <input type="text" class="form-control" name="address2" data-form-field="Address2" id="address2-form1-2g">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-sm-offset">
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">City</label>
                                                    <input type="text" class="form-control" name="city" data-form-field="City" required="" id="city-form1-2g">
                                                </div>
                                            </div>
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">State</label>
                                                    <input type="text" class="form-control" name="state" data-form-field="State" required="" id="state-form1-2g">
                                                </div>
                                            </div>
                                            <div class="col-md-4 multi-horizontal">
                                                <div class="form-group">
                                                    <label class="form-control-label mbr-fonts-style display-7">Zip Code</label>
                                                    <input type="text" class="form-control" name="zip" data-form-field="Zip Code" id="zip-form1-2g">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-sm-offset">
                                            <div class="col-md-12 multi-horizontal">
                                                <div class="form-group">
                                                 <label class="form-control-label mbr-fonts-style display-7">Rent</label>
                                                <input type="text" class="form-control" name="rent" data-form-field="Rent" id="rent-form1-2g">
                                                
                                                </div>
                                       </div>
                                    </div>
                                    <div class="row row-sm-offset">
                                        <div class="col-md-12 multi-horizontal">
                                            <div class="form-group">
                                               <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type="file" id="imageUpload" name="imageUpload" accept=".png, .jpg, .jpeg">
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url(https://d3n43qzkqp558h.cloudfront.net/immutable/images/how-it-works/for-owners/hiwo-photo-1/hiwo-photo-1@2x.9f62d22f4985d7e128a88471aee8dea4b0352526c1e26c033be911bd886815d4.png);">
                            </div>
                        </div>
                    </div>
                                            </div>
                                       </div>
                                    </div>
                                        <span class="input-group-btn">
                                            
                                            <input type="submit" class="btn btn-primary btn-form display-4" value="Add Property">
                                        </span>
                                    
                            
                                        {!!Form::close()!!}
                                {{--</form>--}}       
                        </div>
                    </div>
                </div></section>
</section>
<style>
.test{
    margin-top: 100px;
    background-color: white;
}

    </style>
@endsection
	
