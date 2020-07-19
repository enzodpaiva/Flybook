
 
  @extends('layouts.app2')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Pilotos</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      {{-- <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('admin.piloto-create') }}" role="button">Cadastrar Novo Modelo de Asa Delta</a>
                      </div> --}}
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Idade</th>
                              <th>CPF</th>
                              <th>Nivel</th>
                              <th>Rgistro ABP</th>
                              <th>Validade Habilitação</th>
                              <th>email</th>
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>

                          @foreach ($pilotos as $piloto)
                            <tr>
                            <td>{{$piloto->id}}</td>
                            <td>{{$piloto->name}}</td>
                            <td>{{$piloto->idade}}</td>
                            <td>{{$piloto->cpf}}</td>
                            <td>{{$piloto->level}}</td>
                            <td>{{$piloto->registro_abp}}</td>
                            <td>{{$piloto->validade_habilitacao}}</td>
                            <td>{{$piloto->email}}</td>
                            <td><a class="btn btn-warning" href="/admin/piloto-edit/{{$piloto->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/piloto-apagar/{{$piloto->id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
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