
 
  @extends('layouts.app2')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Asa Delta</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          {{-- <a class="btn btn-success" href="{{ route('admin.asa-delta-create') }}" role="button">Cadastrar Novo Modelo de Asa Delta</a> --}}
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Validade de Manutenção</th>
                              {{-- <th>Tipo de Asa Delta</th> --}}
                              <th>Fabricante</th>
                              <th>Modelo de Asa Delta</th>
                              <th>Dono</th>
                              {{-- <th>Editar</th>
                              <th>Deletar</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($asa_deltas as $asa_delta)
                            <tr>
                              <td>{{$asa_delta->asa_delta_id}}</td>
                              <td>{{$asa_delta->asa_delta_nome}}</td>
                              <td>{{$asa_delta->asa_deltas_validade}}</td>
                              {{-- <td>{{$asa_delta->asa_delta_tipo}}</td> --}}
                              <td>{{$asa_delta->fabricante_nome}}</td>
                              <td>{{$asa_delta->modelo_nome}}</td>
                              <td>{{$asa_delta->piloto_nome}}</td>
                              {{-- <td><a class="btn btn-warning" href="/admin/tipo-asa-delta-edit/{{$asa_delta->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/tipo-asa-delta-apagar/{{$asa_delta->id}}" role="button"><i class="far fa-trash-alt"></i></a></td> --}}
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