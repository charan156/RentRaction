@extends('layouts.homeLayout')
@section('content')

<div class="jumbotron text-center" style="margin:10px">
    <h1>Hello, {{$userName}}</h1>
    {!!Form::open(['action'=> 'ChattingController@index','method'=> 'POST'])!!}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="hiddenValue1" value="{{$userId}}" >
    <input type="hidden" name="hiddenValue2" value="{{$userName}}" >
    <div class="form-group">
        <input type="submit" name="chatting" class="btn btn-primary btn-lg" value="Chatting" />
    </div>
    {!!Form::close()!!}
</div>
@endsection