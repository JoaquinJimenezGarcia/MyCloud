@extends('layouts.app')

@section('content')

<div class="container">
  @include('flash::message')

<div class="row">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Films</div>
        <div class="panel-body">
          <form method="POST" action="http://localhost:8000/films/send" accept-charset="UTF-8" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
              <label class="col-md-4 control-label">Upload Film</label>
              <div class="col-md-6">
                <input type="file" class="form-control" name="file" >
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Your Uploaded Films</div>
          <div class="panel-body">

            @foreach ($files as $file)
              <p>
                <a href="{{ $file }}">{{ $file }}</a>
              </p>

            @endforeach

          </div>
      </div>

    </div>
  </div>
</div>

@endsection
