@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Start for uploading your profile picture</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('profilePicture') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        Profile Picture: <input type="file" name="profilePicture" size="25" />
                        <input type="submit" name="submit" value="Submit" />
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection