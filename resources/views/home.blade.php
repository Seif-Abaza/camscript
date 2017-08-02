@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <div class="col-md-3">
                            <div class="performber-box">
                                <div class="performer-box-head">{{ $user->userName}}</div>
                                <div class="performer-box-body">
                                    <div class="performer-snap"></div>
                                    <div class="performer-footer">
                                        <span>Statistics</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
