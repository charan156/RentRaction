@extends('layouts.homeLayout')
@section('content')
    
    <center><h1>Sign up</h1></center>
    {!!Form::open(['action'=> 'LoginAndRegistrationController@register','method'=> 'POST'])!!}
        <div class="form-group">
            <div class="form-group">
                {{Form::label('firstName','First Name')}}
                {{Form::text('firstName','',['class'=>'form-control','placeholder'=>'First Name','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastName','Last Name')}}
                {{Form::text('lastName','',['class'=>'form-control','placeholder'=>'Last Name','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('userName','User Name')}}
                {{Form::text('userName','',['class'=>'form-control','placeholder'=>'User Name','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('password','Password')}}
                {{Form::password('password',['class'=>'form-control','placeholder'=>'Password','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('confirmPassword','Confirm Password')}}
                {{Form::password('confirmPassword',['class'=>'form-control','placeholder'=>'Confirm Password','required'])}}
            </div>
            <div class="form-group">
                {{Form::label('radio','Owner')}}
                {{Form::radio('role', '1','active')}}
            
                {{Form::label('radio','User')}}
                {{Form::radio('role', '2')}}
            
                {{Form::label('radio','Manager')}}
                {{Form::radio('role', '3')}}
            </div>
        </div>   
                {{Form::submit('Submit',['class'=>'btn btn-warning btn'])}}
                <a class="btn btn-warning btn" href="/" >Back</a>
    {!!Form::close()!!}
    
@endsection