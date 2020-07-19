
 
  @extends('layouts.app3')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Minhas Asas</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('piloto.asa-create') }}" role="button">Cadastrar Nova Asa</a>
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Validade de Manutenção</th>
                              {{-- <th>Tipo de Asa</th> --}}
                              <th>Fabricante</th>
                              <th>Modelo de Asa</th>
                              {{-- <th>Dono</th> --}}
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($asas as $asa_delta)
                            <tr>
                              <td>{{$asa_delta->asa_delta_id}}</td>
                              <td>{{$asa_delta->asa_delta_nome}}</td>
                              <td>{{$asa_delta->asa_deltas_validade}}</td>
                              <td>{{$asa_delta->fabricante_nome}}</td>
                              <td>{{$asa_delta->modelo_nome}}</td>
                              {{-- <td>{{$asa_delta->piloto_nome}}</td> --}}
                              <td><a class="btn btn-warning" href="/piloto/asa-edit/{{$asa_delta->asa_delta_id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/piloto/asa-apagar/{{$asa_delta->asa_delta_id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endsection