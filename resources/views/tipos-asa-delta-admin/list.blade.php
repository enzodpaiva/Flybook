
 
  @extends('layouts.app2')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Tipos de Asa Delta</div>

                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-md-6 mb-4">
                        <a class="btn btn-success" href="{{ route('admin.tipos-asa-delta-create') }}" role="button">Cadastrar Novo Tipo de Asa Delta</a>
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
                        @foreach ($tipos as $tipo)
                            <tr>
                            <td>{{$tipo->id}}</td>
                            <td>{{$tipo->name}}</td>
                            <td><a class="btn btn-warning" href="/admin/tipo-asa-delta-edit/{{$tipo->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/tipo-asa-delta-apagar/{{$tipo->id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
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

  