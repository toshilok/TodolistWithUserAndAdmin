@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">User Info</div>
                  <div class="panel-body" style="padding:15px;">
                <img src="uploads/avatars/{{ $user -> avatars }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"></img>
                <form enctype="multipart/form-data" action="/info" method="POST">
                    <label> Update Profile Image </label>
                  <input type="file" name="avatars">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="submit" class="pull-right btn btn-sm btn-primary">

                  <h2> {{ Auth::user() -> username}}'s Profile</h2>
                  <br><br>
                  <strong><h5>FirstName:</strong> {{ Auth::user() -> firstname}}</h5>
                    <strong><h5>Lastname:</strong> {{ Auth::user() -> lastname}}</h5>
                    <strong><h5>Birthdate:</strong> {{ Auth::user() -> birthday}}</h5>
                    <strong>  <h5>Gender:</strong> {{ Auth::user() -> gender}}</h5>
                      </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
