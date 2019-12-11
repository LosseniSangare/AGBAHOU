@extends('layout.default')

@section('content')
  <div class="">
    @include('layout._navF3add')
  </div>
  <h4 class="tittle-w3-agileits mb-3">{{$title}}</h4>
  <div class="row">
    <div class="col-md-9">
          <p>{{$contenu}}</p>
    </div>
 </div>

@endsection
