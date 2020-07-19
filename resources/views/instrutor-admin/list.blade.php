

  @extends('layouts.app2')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Instrutores</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('instrutor.register') }}" role="button">Cadastrar Novo Instrutor</a>
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Nome</th>
                              <th>Idade</th>
                              <th>CPF</th>
                              <th>Registro ABP</th>
                              <th>Validade Habilitação</th>
                              <th>e-mail</th>
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($instrutors as $instrutor)
                              <tr>
                              <td>{{$instrutor->id}}</td>
                              <td>{{$instrutor->name}}</td>
                              <td>{{$instrutor->idade}}</td>
                              <td>{{$instrutor->cpf}}</td>
                              <td>{{$instrutor->registro_abp}}</td>
                              <td>{{$instrutor->validade_habilitacao}}</td>
                              <td>{{$instrutor->email}}</td>
                              <td><a class="btn btn-warning" href="/admin/instrutor-edit/{{$instrutor->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/instrutor-apagar/{{$instrutor->id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
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
  
    