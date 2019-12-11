@extends('layout.default')
@section('content')
      <h4 class="tittle-w3-agileits mb-4">LISTE DES MEMBRES DE LA SOURCE</h4>
      <div class="">
  @include('layout._navSource')
</div>
      <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">

          <a href="{{route('source_new')}}" class="btn btn-primary">nouveau membre</a>
        </div>
      </div>

      <div class="table-responsive">

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">nom</th>
                      <th scope="col">prenom</th>
                      <th scope="col">date_naissance</th>
                      <th scope="col">sexe</th>
                      <th scope="col">filiere</th>
                      <th scope="col">niveau</th>
                      <th scope="col">profession</th>
                      <th scope="col">contact</th>
                      <th scope="col">email</th>
                      <th scope="col">option</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($membres as $id=> $membre)
                  <tr>
                      <th scope="row">{{$id+1}}</th>
                      <td>{{$membre->nom}}</td>
                      <td>{{$membre->prenom}}</td>
                      <td>{{$membre->date_naissance}}</td>
                      <td>{{$membre->sexe}}</td>
                      <td>{{$membre->filiere}}</td>
                      <td>{{$membre->niveau}}</td>
                      <td>{{$membre->profession}}</td>
                      <td>{{$membre->contact1.' '.$membre->contact2}}</td>
                      <td>{{$membre->email}}</td>
                      <td>
                        <a title="modifier" title="modifier" class="btn btn-default" href="{{route('source_edit',$membre->id)}}"><i class="fa fa-edit"></i></a>
                        <a title="supprimer" class="btn btn-default" href="{{route('source_delete',$membre->id)}}"><i class="fa fa-trash"></i></a>

                      </td>
                  </tr>
              @empty

                @endforelse
              </tbody>
          </table>
      </div>

@endsection
