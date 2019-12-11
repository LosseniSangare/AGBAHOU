@extends('layout.default')

@section('content')
  <div class="">
    @include('layout._navF3addIndex')
  </div>
  <h4 class="tittle-w3-agileits mb-4">{{$titre}}</h4>
  <div class="row">
    <div class="col-md-9">
          <p>{{$presentation}}</p>
    </div>
 </div>


@endsection
