@extends('layout.default')

@section('content')
  <div class="">
    @include('layout._navF3addIndex')
  </div>
  <div class="container-fluid">
      <div class="row">
          <!-- Stats -->
          <div class=" col-xl">
            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-users text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Nom:  {{$membre->nom}} </span>

                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-users text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Prenom:  {{$membre->prenom}}</span>
                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fa fa-calendar text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">date_naissance:  {{$membre->date_naissance}}</span>
                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-blind text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Sexe:  {{$membre->sexe}}</span>

                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-graduation-cap text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Profession: {{$membre->profession}}</span>
                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-address-book text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Contact:  {{$membre->contact1}}</span>
                        </div>
                  </li>
                </ul>
              </div>

            <div class="email-list col-9">
                <ul class="collection">
                    <li class="collection-item d-flex justify-content-between">
                        <i class="fas fa-envelope text-primary align-self-center mr-3"></i>
                        <div class="mid-cn">
                            <span class="email-title">Email: {{$membre->email}}</span>

                        </div>
                  </li>
                </ul>
              </div>
          </div>
          <!--// Stats -->
          <!-- Pie-chart -->
          <div class=" col-xl ml-xl-3 mt-xl-0 mt-3">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">montant</th>
                            <th scope="col">date_cotisation</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach ($membre->cotisations as $cotisation)
                  <tr>
                    <td>{{$cotisation->montant}}</td>
                    <td>{{$cotisation->created_at}}</td>
                  </tr>
                @endforeach
                    </tbody>
                    <tfoot>
                      <tr>

                        <th> cotisation total de {{$membre->nom}} : {{$total}}</th>

                      </tr>
                    </tfoot>
                </table>
            </div>
          </div>
          <!--// Pie-chart -->
      </div>
  </div>
@endsection
