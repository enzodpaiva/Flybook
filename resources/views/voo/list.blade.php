@extends('layouts.app2')
  @section('content')
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Lista de Voos feitos por todos os pilotos</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          {{-- <a class="btn btn-success" href="{{ route('admin.voo-create') }}" role="button">Cadastrar Nova Rampa</a> --}}
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Data</th>
                              <th>Distancia</th>
                              <th>Altura</th>
                              <th>Direção do Voo</th>
                              <th>Status</th>
                              <th>Lift</th>
                              <th>Termais</th>
                              <th>Visibilidade</th>
                              <th>Inicio Voo</th>
                              <th>Fim Voo</th>
                              <th>Velocidade do Vento</th>
                              <th>Rampa</th>
                              <th>Asa Delta</th>
                              <th>Piloto</th>
                              <th>Instrutor</th>
                              <th>Criado em</th>
                              <th>Atualizado em</th>
                              {{-- <th>Editar</th>
                              <th>Deletar</th> --}}
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($voos as $voo)
                            <tr>
                            <td>{{$voo->voo_id}}</td>
                            <td>{{$voo->voo_data}} </td>
                            <td>{{$voo->voo_distancia}}</td>
                            <td>{{$voo->voo_altura}}</td>
                            <td>{{$voo->voo_direcao}}</td>
                            <td>{{$voo->voo_status}}</td>
                            <td>{{$voo->voo_lift}}</td>
                            <td>{{$voo->voo_termais}}</td>
                            <td>{{$voo->voo_visibilidade}}</td>
                            <td>{{$voo->voo_inicio}}</td>
                            <td>{{$voo->voo_fim}}</td>
                            <td>{{$voo->voo_velocidade}}</td>
                            <td>{{$voo->voo_rampa}}</td>
                            <td>{{$voo->voo_asa}}</td>
                            <td>{{$voo->voo_piloto}}</td>
                            <td>{{$voo->voo_instrutor}}</td>
                            <td>{{$voo->voo_criado}}</td>
                            <td>{{$voo->voo_atualizado}}</td>
                              {{-- <td><a class="btn btn-warning" href="#" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="#" role="button"><i class="far fa-trash-alt"></i></a></td> --}}    
                          @endforeach
                          </tr>
                      </tbody>
                  </table>
                  </div>
              </div>
          </div>
      </div>
  @endsection
  
    