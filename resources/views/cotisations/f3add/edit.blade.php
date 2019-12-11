@extends('layout.default')

@section('content')
  <div class="">
    @include('layout._navF3addIndex')
  </div>
  @php
    $fieldException=[];
  @endphp
      <h4 class="tittle-w3-agileits mb-4">{{'cotisation de  '.$cotisation->membreLinked->nom."  ".$cotisation->membreLinked->prenom}}</h4>
      <form action="{{route('cotisation_f3add_update',$cotisation)}}" method="post">
        @csrf
          <div class="form-group row">
              <label for="inputEmail1" class="col-sm-2 col-form-label">montant:</label>
              <div class="col-sm-10">
                  <input value="{{$cotisation->montant}}" name="montant" type="text" class="form-control" id="inputEmail1"  >
                  {!! $errors->first('montant','<span style="color:red">:message</span>') !!}
              </div>
         </div>

              <input hidden type="text" name="association_id" value="3">
          <div class="form-group row">
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Valider</button>
              </div>
          </div>
      </form>
@endsection
