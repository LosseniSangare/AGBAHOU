@extends('layout.default')

@section('content')
  @php
    $fieldException=[];
  @endphp
  <div class="">
    @include('layout._navF3addIndex')
  </div>
      <h4 class="tittle-w3-agileits mb-4">{{$title}}</h4>
      <form action="{{route('cotisation_f3add_store')}}" method="post">
        @csrf
          <div class="form-group row">
              <label for="inputEmail1" class="col-sm-2 col-form-label">montant:</label>
              <div class="col-sm-10">
                  <input  name="montant" type="text" class="form-control" id="inputEmail1"  >
                  {!! $errors->first('montant','<span style="color:red">:message</span>') !!}
              </div>
         </div>

         <input hidden type="text" name="association" value="3">
         <input hidden type="text" name="membre" value={{$id}}>
          <div class="form-group row">
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Valider</button>
              </div>
          </div>
      </form>
@endsection
