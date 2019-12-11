@extends('layout.default')
@section('content')
  <div class="">
  @include('layout._navJeune')
</div>
  <h4 class="tittle-w3-agileits mb-4">{{$titre}}</h4>
  <div class="row">
        <div class="col-md-14">
          <p>{{$presentation}}</p>
    </div>
  </div>


@endsection
