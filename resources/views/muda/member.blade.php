@extends('layout.default')
@section('content')
  <div class="">
  @include('layout._nav')
</div>
      <h4 class="tittle-w3-agileits mb-4">LISTE DES MEMBRES DE LA MUDA</h4>
      <div class="row">
        <div class="col-md-10"></div>
           <div class="col-md-2">
             <a href="{{route('mudada')}}" class="btn btn-primary">nouveau membre</a>
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
                      <th scope="col">profession</th>
                      <th scope="col">contact</th>
                      <th scope="col">email</th>
                      <th scope="col">option</th>
                  </tr>
              </thead>
              <tbody>
                @forelse ($membres as $key=> $membre)
                  <tr>
                      <th scope="row">{{$key+1}}</th>
                      <td>{{$membre->nom}}</td>
                      <td>{{$membre->prenom}}</td>
                      <td>{{$membre->date_naissance}}</td>
                      <td>{{$membre->profession}}</td>
                      <td>{{$membre->contact1.' '.$membre->contact2}}</td>
                      <td>{{$membre->email}}</td>
                      <td>
                        <a title="modifier" class="btn btn-default" href="{{route('muda_edit',$membre->id)}}"><i class="fa fa-edit"></i></a>
                        <a title="supprimer" class="btn btn-default" href="{{route('muda_delete',$membre->id)}}"><i class="fa fa-trash"></i></a>
                      </td>

                  </tr>

                @empty

                @endforelse

              </tbody>
          </table>
      </div>

@endsection
