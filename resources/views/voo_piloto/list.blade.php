@extends('layouts.app3')
  @section('content')
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Meus Voos</div>
  
                  <div class="card-body w-100 p-3 table-responsive">
                    <div class="form-group row">
                      <div class="col-md-6 mb-4">
                          <a class="btn btn-success" href="{{ route('piloto.create-voo') }}" role="button">Cadastrar Novo voo</a>
                      </div>
                    </div>
  
                    <table id="example" class="display table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Data</th>
                              <th>Distancia</th>
                              <th>Altura</th>
                              <th>Direção do vento</th>
                              <th>Status</th>
                              <th>Lift</th>
                              <th>Termais</th>
                              <th>Visibilidade</th>
                              <th>Inicio Voo</th>
                              <th>Fim Voo</th>
                              <th>Velocidade do Vento</th>
                              <th>Rampa</th>
                              <th>Asa usada</th>
                              <th>Instrutor</th>
                              <th>observações</th>
                              <th>cadastrado em</th>
                              <th>atualizado em</th>
                              <th>Editar</th>
                              <th>Deletar</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($voos as $voo)
                            <tr>
                            <td>{{$voo->voo_id}}</td>
                            <td>{{$voo->voo_data}} </td>
                            <td>{{$voo->voo_distancia}}(m)</td>
                            <td>{{$voo->voo_altura}}(m)</td>
                            <td>{{$voo->voo_direcao_vento}}</td>
                            <td>{{$voo->voo_status}}</td>
                            <td>{{$voo->voo_lift}}</td>
                            <td>{{$voo->voo_termais}}</td>
                            <td>{{$voo->voo_visibilidade}}</td>
                            <td>{{$voo->voo_inicio}}</td>
                            <td>{{$voo->voo_fim}}</td>
                            <td>{{$voo->voo_velocidade_vento}}(km/h)</td>
                            <td>{{$voo->rampas_local}}</td>
                            <td>{{$voo->asa_deltas_nome}}</td>
                            <td>{{$voo->instrutors_name}}</td>
                            <td>{{$voo->voo_observacao}}</td>
                            <td>{{$voo->voo_criado}}</td>
                            <td>{{$voo->voo_atualizado}}</td>
                            <td><a class="btn btn-warning" href="/piloto/voo-edit/{{$voo->voo_id}}" role="button">
                                <i class="fas fa-edit"></i>
                              </a></td>
                              <td><a class="btn btn-danger glyphicon glyphicon-pencil" href="/piloto/voo-apagar/{{$voo->voo_id}}" role="button"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            @endforeach
                      </tbody>
                  </table>
                  </div>
              </div>
          </div>
      </div>
  @endsection
  
    