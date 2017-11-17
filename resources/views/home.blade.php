@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @foreach($users as $user)
                        <a href="/perform/show/{{ $user->id }}"><div class="col-md-3">
                            <div class="performer-box">
                                <div class="performer-box-head">{{ $user->userName}}</div>
                                <div class="performer-box-body">
                                    <div class="performer-snap"></div>
                                    <div class="performer-footer">
                                        <span>Statistics</span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
