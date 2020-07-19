@extends('layouts.app3')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Piloto</div>

                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <a href="{{ route('piloto.voo-list') }}" class="btn btn-outline-primary" role="button">Meus voos</a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('piloto.asa-list') }}" class="btn btn-outline-primary" role="button">Minhas asas</a>
                        </div>
                        
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
