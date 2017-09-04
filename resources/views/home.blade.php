@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome {{ Auth::user()->name }} !
                </div>
                <div class="panel-body">
                    <a href="{{ route('documents') }}">Documents</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('images') }}">Images</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('films') }}">Films</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('music') }}">Music</a>
                </div>
                <div class="panel-body">
                    <a href="{{ route('otherdata') }}">Other data</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
