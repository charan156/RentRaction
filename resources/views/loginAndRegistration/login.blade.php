@extends('layouts.mainLayout')
@section('content')
<div id="custom-html-r" custom-code="true" data-rv-view="428" style="
height: 960px;
"><div class="login-wrap bg">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked=""><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
               {{-- <p class="text-danger">{{$message}}</p>--}}
			<div class="sign-in-htm">
                    {!!Form::open(['action'=> 'LoginAndRegistrationController@verifyLogin','method'=> 'POST'])!!}
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="group">
					<label for="user" class="label">Email</label>
					<input id="user" name="email" type="email" class="input" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="password" type="password" class="input" data-type="password" required>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked="">
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
                </div>
                {!!Form::close()!!}
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
                {!!Form::open(['action'=> 'LoginAndRegistrationController@register','method'=> 'POST'])!!}
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="group">

                        <group class="inline-radio">
                
                        <div>{{Form::radio('role', '1','active')}}<label>Owner</label></div>
                        <div>{{Form::radio('role', '2')}}<label>Renter</label></div>
                        <div>{{Form::radio('role', '3')}}<label>Manager</label></div>
                        </group>
                    </div>
                                 
                    <div class="group">
                    <label for="name" class="label">First Name</label>
                    <input id="firstName" name="firstName" type="text" class="input" required>
                    </div>
                    <div class="group">
                    <label for="name" class="label">Last Name</label>
                    <input id="lastName" name="lastName" type="text" class="input" required>
                    </div>
                    <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="userName" name="userName" type="text" class="input" required>
                    </div>
                    <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="password" name="password" type="password" class="input" data-type="password" required>
                    </div>
                    <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="confirmPassword" name="confirmPassword" type="password" class="input" data-type="password" required>
                    </div>
                    <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="emailValidate" name="emailValidate" type="email" class="input" required>
                    </div>
                    <div class="group">
                    <input type="submit" class="button signUp" id="signUp" name="signUp" value="Sign Up">
                    </div>
                    <div class="hr"></div>
                {!!Form::close()!!}
			</div>
		</div>
	</div>
</div></div>
<script>
    var password = document.getElementById("password");
    var confirmPassword = document.getElementById("confirmPassword");

function validatePassword(){
  if(password.value != confirmPassword.value) {
    confirmPassword .setCustomValidity("Passwords Don't Match");
  } else {
    confirmPassword.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirmPassword.onkeyup = validatePassword;


var emailValidate = document.getElementById("emailValidate");
$(document).ready(function(){
    $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
    //alert('bill');
$('#emailValidate').on('change', function(){
		//alert('bill');
		$.ajax({
				type:"POST",
				url:"/validateEmail",
                data: {'_token':$('input[name=_token').val(),
                        'emailValidate':$('input[name=emailValidate').val()},
				success:function(data)
				{
                    //console.log(data);
					//alert("bill");
					if(data == "true")
					{
                        alert("Email already used!!!");
                        console.log(data);
                       // emailValidate.attributes("background-color","#0F0");
					  // emailValidate.setCustomValidity("Email already used!!!");
					}
				}
        })
        emailValidate.onchange = validatePassword;
    });
});  

</script>

@endsection