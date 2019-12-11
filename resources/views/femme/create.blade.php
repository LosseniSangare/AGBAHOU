@extends('layout.default')
@section('content')
  <div class="">
    @include('layout._navFemme')
  </div>
  @php
    $fieldException=[];
  @endphp
      <h4 class="tittle-w3-agileits mb-4">AJOUTER UNE FEMME</h4>
      <form action="{{route('femme_store')}}" method="post">
        @csrf
          <div class="form-group row">
              <label for="inputEmail1" class="col-sm-2 col-form-label">Nom:</label>
              <div class="col-sm-10">
                  <input name="nom" type="text" class="form-control" id="inputEmail1"  >
                  {!! $errors->first('nom','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail2" class="col-sm-2 col-form-label">Prenom:</label>
              <div class="col-sm-10">
                  <input name="prenom" type="text" class="form-control" id="inputEmail2">
                  {!! $errors->first('prenom','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">date de naissance:</label>
              <div class="col-sm-10">
                  <input name="date_naissance" type="date" class="form-control" id="inputEmail3" >
                  {!! $errors->first('date_naissance','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail4" class="col-sm-2 col-form-label">Profession:</label>
              <div class="col-sm-10">
                  <input name="profession" type="text" class="form-control" id="inputEmail4" >
                  {!! $errors->first('profession','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail5" class="col-sm-2 col-form-label">Contact 1:</label>
              <div class="col-sm-10">
                  <input name="contact1" type="text" class="form-control" id="inputEmail5" >
                  {!! $errors->first('contact1','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          <div class="form-group row">
              <label for="inputEmail6" class="col-sm-2 col-form-label">Contact 2:</label>
              <div class="col-sm-10">
                  <input name="contact2" type="text" class="form-control" id="inputEmail6" >
                  {!! $errors->first('contact2','<span style="color:red">:message</span>') !!}
              </div>
          </div>
           <div class="form-group row">
              <label for="inputEmail7" class="col-sm-2 col-form-label">Email:</label>
              <div class="col-sm-10">
                  <input name="email" type="email" class="form-control" id="inputEmail7" >
                  {!! $errors->first('email','<span style="color:red">:message</span>') !!}
              </div>
          </div>
          {{-- <div class="form-group row">
              <label for="inputEmail8" class="col-sm-2 col-form-label">Filiere:</label>
              <div class="col-sm-10">
                  <input name="filiere" type="text" class="form-control" id="inputEmail8" >
              </div>
              {!! $errors->first('filiere') !!}
          </div>
          <div class="form-group row">
              <label for="inputEmail9" class="col-sm-2 col-form-label">Niveau:</label>
              <div class="col-sm-10">
                  <input name="niveau" type="text" class="form-control" id="inputEmail9" >
              </div>
              {!! $errors->first('niveau') !!}
          </div> --}}

          <fieldset class="form-group">
              <div class="row">
                  <label class="col-form-label col-sm-2 pt-0">Sexe:</label>
                  <div class="col-sm-10">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexe" id="gridRadios1" value="M">
                          <label class="form-check-label" for="gridRadios1">
                              masculin
                          </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="sexe" id="gridRadios2" value="F">
                          <label class="form-check-label" for="gridRadios2">
                              feminin
                          </label>
                      </div>

                      {!! $errors->first('sexe','<span style="color:red">:message</span>') !!}
                  </div>
              </div>
          </fieldset>
              <input hidden type="text" name="association_id" value="5">
          <div class="form-group row">
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Valider</button>
              </div>
          </div>
      </form>
@endsection
