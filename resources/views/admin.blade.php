@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Admin</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="form-group row">
                            <div class="col-md-6 mb-4">
                                <a class="btn btn-outline-primary" href="{{ route('admin.rampa-list') }}" role="button">Administrar Rampas</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.fabricante-list') }}" class="btn btn-outline-primary" role="button">Administrar Fabricantes</a>
                            </div>
                            <div class="col-md-6 mb-4">
                                <a href="{{ route('admin.instrutor-list') }}" class="btn btn-outline-primary" role="button">Administrar Instrutores</a>
                            </div>
                            <div class="col-md-6  mb-4">
                                <a href="{{ route('admin.modelo-asa-delta-list') }}" class="btn btn-outline-primary" role="button">Administrar Modelos de Asa Delta</a>
                            </div>
                            {{-- <div class="col-md-6 mb-4">
                                <a href="{{ route('admin.tipo-asa-delta-list') }}" class="btn btn-outline-primary" role="button">Administrar Tipos de Asa Delta</a>
                            </div> --}}
                            <div class="col-md-6  mb-4">
                                <a href="{{ route('admin.piloto-list') }}" class="btn btn-outline-primary" role="button">Administrar Pilotos</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.voo-list') }}" class="btn btn-outline-primary" role="button">Administrar Voos</a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.asa-delta-list') }}" class="btn btn-outline-primary" role="button">Administrar Asa Delta</a>
                            </div>
                        </div>  
                    </div>
                </div>  
            </div>  
        </div  >
    </div>  
</div>
@endsection
