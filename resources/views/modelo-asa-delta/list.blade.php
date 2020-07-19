
 
  @extends('layouts.app2')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Modelos de Asa Delta</div>
  
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('admin.modelo-asa-delta-create') }}" role="button">Cadastrar Novo Modelo de Asa Delta</a>
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>
                          
                            @foreach ($modelos as $modelo)
                            <tr>
                            <td>{{$modelo->id}}</td>
                            <td>{{$modelo->name}}</td>
                            <td><a class="btn btn-warning" href="/admin/modelo-asa-delta-edit/{{$modelo->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/modelo-asa-delta-apagar/{{$modelo->id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
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