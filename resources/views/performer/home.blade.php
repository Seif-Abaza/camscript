@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Performing&nbsp;&nbsp;&nbsp;
                    <img class="greenCircle" src="{{ asset('/images/greenCircle.png') }}"/>
                    <img class="grayCircle" src="{{ asset('/images/grayCircle.png') }}"/></div>
                <div class="panel-body">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="flex-container-row">
                                    <label class="start-web-cam-label">Start web cam</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="starting-cam" type="checkbox" data-toggle="toggle">
                                </div>
                            </div>
                            <div class="panel-body video-container">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading chat-container-header">
                                <div class="flex-container-row">
                                    23 Members
                                </div>
                            </div>
                            <div class="panel-body chat-container">
                                <div class="chat-text-container">
                                    <ul></ul>
                                </div>
                                <div class="flex-container-row">
                                    {{--<input type="hidden" id="token" value="{{{ csrf_token() }}">--}}
                                    <input class="text-input-chat" type="text" class="text-input"/><input class="button-send-chat btn btn-primary" type="submit" value="Send"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection