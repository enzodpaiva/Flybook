@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Um Novo Tipo de Asa Delta</div>

                <div class="card-body">
                    <form method="POST" action="/admin/tipo-asa-delta-store/{{$tipo->id}}">
                        @csrf
                        
                        <div class="row">
                          <div class="col-6 mb-4">
                          <input type="text" class="form-control" name="name" value="{{$tipo->name}}" placeholder="Nome do Tipo">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary ">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection