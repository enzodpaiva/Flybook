

  @extends('layouts.app2')
  @section('content')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Rampas</div>
  
                  <div class="card-body">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('admin.rampa-create') }}" role="button">Cadastrar Nova Rampa</a>
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Local</th>
                              <th>Altitude</th>
                              <th>Quadrante</th>
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($rampas as $rampa)
                              <tr>
                              <td>{{$rampa->id}}</td>
                              <td>{{$rampa->local}}</td>
                              <td>{{$rampa->altitude}}</td>
                              <td>{{$rampa->quadrante}}</td>
                              <td><a class="btn btn-warning" href="/admin/rampa-edit/{{$rampa->id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/admin/rampa-apagar/{{$rampa->id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
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
  
    