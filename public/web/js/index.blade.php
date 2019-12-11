@extends('layout.default')
@section('content')
  <h4 class="tittle-w3-agileits mb-4">{{$titre}}</h4>
  <div class="row">
    <div style="border-right:5px solid" class="col-md-3">
      <a href="{{route('jeunesse_index')}}" >PRESENTATION</a><br>
      <a href="{{route('jeunesse_speech')}}" >MOT DU PRESIDENT</a><br>
      <a href="{{route('jeunesse_information')}}" >INFORMATIONS</a><br>
      <a href="{{route('jeunesse_consulter')}}" >MEMBRES</a><br>
    </div>
    <div class="col-md-9">
          <p>{{$presentation}}</p>
    </div>
  </div>

@endsection
