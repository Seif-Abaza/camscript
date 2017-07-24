@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Personal Info</div>
                <div class="panel-body">
                    <!-- UserName -->
                    <div class="row">
                        <div class="col-md-10">UserName: <strong>{{ $user->userName }}</strong></div>
                        <div class="col-md-2"><button type="button" class="btn btn-info">Edit</button></div>
                    </div>
                    <hr>
                    <!-- firstName -->
                    <div class="row">
                        <div class="col-md-10">First Name: <strong>{{ $user->firstName }}</strong></div>
                        <div class="col-md-2"><button type="button" class="btn btn-info">Edit</button></div>
                    </div>
                    <hr>

                    <!-- lastName -->
                    <div class="row">
                        <div class="col-md-10">Last Name: <strong>{{ $user->lastName }}</strong></div>
                        <div class="col-md-2"><button type="button" class="btn btn-info">Edit</button></div>
                    </div>
                    <hr>

                    <!-- dob -->
                    <div class="row">
                        <div class="col-md-10">DOB: <strong>{{ $user->dob }}</strong></div>
                        <div class="col-md-2"><button type="button" class="btn btn-info">Edit</button></div>
                    </div>
                    <hr>

                    <!-- email -->
                    <div class="row">
                        <div class="col-md-10">Email: <strong>{{ $user->email }}</strong></div>
                        <div class="col-md-2"><button type="button" class="btn btn-info">Edit</button></div>
                    </div>
                    <hr>

                    <!-- Upload profile picture -->
                    <div class="row">
                        <form class="form-horizontal" method="POST" action="{{ route('profilePicture') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-10">Profile Picture: <input type="file" name="profilePicture" size="25" />
                            </div>
                            <div class="col-md-2"><input class="btn btn-primary" type="submit" name="submit" value="Submit"/></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection