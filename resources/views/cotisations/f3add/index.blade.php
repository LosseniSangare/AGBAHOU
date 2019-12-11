@extends('layout.default')

@section('content')
  <div class="">
    @include('layout._navF3addIndex')
  </div>
  <h4 class="tittle-w3-agileits mb-4">LISTE DES COTISATIONS F3ADD</h4>
  <div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-2">

  </div>
</div>

  <div class="table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">nom</th>
                  <th scope="col">prenom</th>
                  <th scope="col">contact</th>
                  <th scope="col">email</th>
                  <th scope="col">montant</th>
                  <th scope="col">option</th>
              </tr>
          </thead>
          <tody>
            @forelse ($cotisations as $id=> $cotisation)
              <tr>
                  <th scope="row">{{$id+1}}</th>
                  <td>{{$cotisation->membreLinked->nom}}</td>
                  <td>{{$cotisation->membreLinked->prenom}}</td>
                  <td>{{$cotisation->membreLinked->contact1}}</td>
                  <td>{{$cotisation->membreLinked->email}}</td>
                  <td>{{$cotisation->montant}}</td>

                  <td>
                    <a title="modifier" class="btn btn-default" href="{{route('cotisation_f3add_edit',$cotisation->id)}}"><i class="fa fa-edit"></i></a>
                    <a title="voir" class="btn btn-default" href="{{route('cotisation_f3add_show',$cotisation->membreLinked->id)}}"><i class="fa fa-eye"></i></a>
                  </td>
              </tr>

            @empty

            @endforelse

          </tbody>
      </table>
  </div>

@endsection
