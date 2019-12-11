@extends('layout.default')
@section('content')
  <div class="">
    @include('layout._navF3add')
  </div>
  <h4 class="tittle-w3-agileits mb-3">{{$title}}</h4>
  <div class="row">
    <div class="col-md-2">
      <img src="{{asset('web/images/c4.jpg')}}" alt="" >

    </div>
    <div class="col-md-10">
          <p>{{$presentation}}</p>
    </div>
  </div>

@endsection
