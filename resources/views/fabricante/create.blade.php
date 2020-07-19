@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Um Novo Fabricante</div>

                <div class="card-body">
                    <form method="POST" action="/admin/fabricante-store">
                        @csrf
                        
                        <div class="row">
                          <div class="col-6 mb-4">
                            <input type="text" class="form-control" name="name" placeholder="Nome">
                            </div>
                            <div class="col-6 mb-4">
                            <input type="text" class="form-control" name="cnpj" placeholder="CNPJ">
                            </div>
                        </div>
                        <center>
                        <button type="submit" class="btn btn-primary ">Salvar</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection