@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastre-se Instrutor') }}</div>

                <div class="card-body">
                    <form method="POST" action="/admin/instrutor-store/{{$instrutors->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome*') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $instrutors->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade*') }}</label>

                            <div class="col-md-6">
                                <input id="idade" type="number" class="form-control @error('idade') is-invalid @enderror" name="idade" value="{{ $instrutors->idade }}" required autocomplete="idade" autofocus>

                                @error('idade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF*') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="number" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ $instrutors->cpf }}" required autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail*') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $instrutors->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registro_abp" class="col-md-4 col-form-label text-md-right">{{ __('Registro ABP') }}</label>

                            <div class="col-md-6">
                                <input id="registro_abp" type="text" class="form-control @error('registro_abp') is-invalid @enderror" name="registro_abp" value="{{ $instrutors->registro_abp }}" autocomplete="registro_abp" autofocus>

                                @error('registro_abp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="validade_habilitacao" class="col-md-4 col-form-label text-md-right">{{ __('Validade Habilitação') }}</label>

                            <div class="col-md-6">
                                <input id="validade_habilitacao" type="date" class="form-control @error('validade_habilitacao') is-invalid @enderror" name="validade_habilitacao" value="{{ $instrutors->validade_habilitacao }}" autocomplete="validade_habilitacao" autofocus>

                                @error('validade_habilitacao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="img_perfil" class="col-md-4 col-form-label text-md-right">{{ __('Imagem de Perfil') }}</label>

                            <div class="col-md-6">
                                <input id="img_perfil" placeholder="em breve" type="text" class="form-control @error('img_perfil') is-invalid @enderror" name="img_perfil" value="{{ $instrutors->img_perfil }}" autocomplete="img_perfil" readonly autofocus>

                                @error('img_perfil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registre-se') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
