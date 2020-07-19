@extends('layouts.app3')
<style> 
    h11 {
     color:red;
 }
 
 #logo {
         width:50%;
         height:50%;
 }
 
 .panel-heading{
     font-size:150%;
 }
 
     </style> 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Atualização De Asa</div>

                <div class="card-body">
                    
                    <form class="form-horizontal" method="POST" action="/piloto/asa-update/{{$asa->id}}">
                      @csrf
              <fieldset>
              <div class="panel panel-primary">
                  <div class="panel-body">
              <div class="form-group">
              <!--
              <div class="form-group">   
              <div class="col-md-4 control-label">
                  <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
              </div>
              <div class="col-md-4 control-label">
                  <h1>Cadastro de Cliente</h1>
                  
              </div>
              </div>
                  -->
              <div class="col-md-11 control-label">
                      <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
              </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label" for="Nome">Nome<h11>*</h11></label>  
                <div class="col-md-8">
                <input id="Nome" name="Nome" value="{{$asa->nome}}" placeholder="" class="form-control input-md mb-4" required="" type="text">
                </div>

                <div class="form-group">
                  <label class="col-md-2 control-label" for="Nome"></label>  
                  <div class="col-md-8">
                  <input id="user" name="user" value="{{Auth::id()}}" placeholder="Apenas números" class="form-control input-md mb-4" required="" type="hidden" maxlength="11" pattern="[0-9]+$">
                  </div>

                <label class="col-md-4 control-label" for="Nome">Ultima Revisão<h11>*</h11></label>  
                <div class="col-md-4">
                <input id="data" name="data" value="{{$asa->validade_manutencao}}" placeholder="DD/MM/AAAA" class="form-control input-md mb-4" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
              
                  </div>
                  {{-- <div class="mb-4">
                      <em>Tipo de Asa</em>
                      <select data-placeholder="Your Favorite Type of Bear" name="asatipo" class="chosen-select" tabindex="7">
                        <option value="null">Selecione o tipo de asa</option>
                        @foreach(App\tipoAsaDelta::all() as $cat)
                        <option value="{{$cat->id}}">{{$cat->local}}</option>
                        @endforeach
                      </select>
                    </div> --}}
                    <em>Modelo de Asa</em>
                      <select data-placeholder="Your Favorite Type of Bear" name="asamodelo" class="chosen-select" tabindex="7">
                        <option value="null">Selecione o modelo de asa</option>
                        @foreach(App\modeloAsaDelta::all() as $cat)
                      <option value="{{$cat->id}}"
                        @if ($cat->id==$asa->modelo_id)
                          selected="selected"
                          @endif>{{$cat->name}} </option>
                        @endforeach
                      </select>
                    </div>
                    <em>Fabricante</em>
                      <select data-placeholder="Your Favorite Type of Bear" name="fabricante" class="chosen-select" tabindex="7">
                        <option value="null">Selecione o fabricante</option>
                        @foreach(App\fabricante::all() as $cat)
                        <option value="{{$cat->id}}"
                          @if ($cat->id==$asa->fabricante_id)
                          selected="selected"
                          @endif>{{$cat->name}} - cnpj: {{$cat->cnpj}}</option>
                        @endforeach
                      </select>
                    </div>
              </div>
              </div>
              
              <!-- Button (Double) -->
              <div class="form-group">
                <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8">
                  <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                </div>
              </div>
              
              </div>
              </div>
              
              
              </fieldset>
              </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>

function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i);
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>