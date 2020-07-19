@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrar Rampa</div>

                <div class="card-body">
                    <form method="POST" action="/admin/rampa-store">
                        @csrf
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" name="local" placeholder="Local">
                          </div>
                          <div class="col">
                            <input type="number" class="form-control" name="altitude" placeholder="Altitude(m)">
                          </div>
                          <div class="col">
                            <input type="text" class="form-control mb-4" name="quadrante" placeholder="Quadrante">
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