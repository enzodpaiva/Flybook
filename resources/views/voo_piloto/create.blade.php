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
                <div class="card-header">Cadastro De Voo</div>

                <div class="card-body">
                    
    <form class="form-horizontal" method="POST" action="/piloto/voo-store">
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Direção do vento<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="direcao" name="direcao" placeholder="" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-3 control-label" for="Nome">Visibilidade<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="visibilidade" name="visibilidade" placeholder="" class="form-control input-md mb-4" required="" type="text">
  </div>
</div>

<div class="form-group">
    <label for="appt">Hora de Inicio:</label>

<input type="time" id="inicio" name="inicio"
       min="00:00" max="24:00" required>
       <label for="appt">Hora do Fim:</label>

<input type="time" id="fim" name="fim"
       min="00:00" max="24:00" required>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Distancia (metros) <h11>*</h11></label>  
  <div class="col-md-8">
  <input id="distancia" name="distancia" placeholder="Apenas números" class="form-control input-md mb-4" required="" type="number" maxlength="11" pattern="[0-9]+$">
  </div>

  <div class="form-group">
    <label class="col-md-2 control-label" for="Nome"></label>  
    <div class="col-md-8">
    <input id="user" name="user" value="{{Auth::id()}}" placeholder="Apenas números" class="form-control input-md mb-4" required="" type="hidden" maxlength="11" pattern="[0-9]+$">
    </div>

  <div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Altura (metros)<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="altura" name="altura" placeholder="Apenas números" class="form-control input-md mb-4" required="" type="number" maxlength="11" pattern="[0-9]+$">
  </div>

  <div class="form-group mb-4">
  <label class="col-md-2 control-label" for="Nome">Data<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="data" name="data" placeholder="DD/MM/AAAA" class="form-control input-md mb-4" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="Nome">Velocidade do Vento (km/h)<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="velocidade" name="velocidade" placeholder="Apenas números" class="form-control input-md mb-4" required="" type="number" maxlength="11" pattern="[0-9]+$">
  </div>

<!-- Multiple Radios (inline) -->

  <label class="col-md-2 control-label" for="radios">Lift <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="lift" id="lift" value="sim" type="radio" required>
      Sim
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="lift" id="lift" value="não" type="radio">
      Não
    </label>
  </div>
</div>
<label class="col-md-4 control-label" for="radios">Termais <h11>*</h11></label>
  <div class="col-md-4"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="termais" id="termais" class="mb-4" value="sim" type="radio" required>
      Sim
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="termais" id="termais" value="não" type="radio">
      Não
    </label>
  </div>
  <div class="mb-4">
        <em>Instrutor<h11>*</h11></em>
        <select data-placeholder="Your Favorite Type of Bear" name="instrutor" class="chosen-select" tabindex="7">
          <option value="null">Selecione o Instrutor</option>
              @foreach(App\instrutor::all() as $cat)
        <option value="{{$cat->id}}">{{$cat->name}} - {{$cat->cpf}}</option>
              @endforeach
            {{-- <option value=""></option>
          <option>American Black Bear</option>
          <option>Asiatic Black Bear</option>
          <option>Brown Bear</option>
          <option>Giant Panda</option>
          <option selected>Sloth Bear</option>
          <option disabled>Sun Bear</option>
          <option>Polar Bear</option>
          <option disabled>Spectacled Bear</option> --}}
        </select>
      </div>
      <em>Rampa<h11>*</h11></em>
        <select data-placeholder="Your Favorite Type of Bear" name="rampa"  class="chosen-select" tabindex="7">
            <option value="null">Selecione a rampa</option>
            @foreach(App\rampa::all() as $cat)
            <option value="{{$cat->id}}">{{$cat->local}} - altitude: {{$cat->altitude}}m</option>
            @endforeach
            {{-- <option value=""></option>
          <option>American Black Bear</option>
          <option>Asiatic Black Bear</option>
          <option>Brown Bear</option>
          <option>Giant Panda</option>
          <option selected>Sloth Bear</option>
          <option disabled>Sun Bear</option>
          <option>Polar Bear</option>
          <option disabled>Spectacled Bear</option> --}}
        </select>
      </div>
      <em>Asa<h11>*</h11></em>
        <select data-placeholder="Your Favorite Type of Bear" name="asa" class="chosen-select" tabindex="7">
            <option value="null">Selecione sua asa</option>
            @foreach($asas as $cat)
            <option value="{{$cat->asa_delta_id}}">{{$cat->asa_delta_nome}} - ultima manutenção: {{$cat->asa_deltas_validade}}</option>
            @endforeach
            {{-- <option value=""></option>
          <option>American Black Bear</option>
          <option>Asiatic Black Bear</option>
          <option>Brown Bear</option>
          <option>Giant Panda</option>
          <option selected>Sloth Bear</option>
          <option disabled>Sun Bear</option>
          <option>Polar Bear</option>
          <option disabled>Spectacled Bear</option> --}}
        </select>
      </div>
      <div class="form-group">
        <em>Observações</em>
        <textarea class="form-control" name="observacoes" id="exampleFormControlTextarea1" rows="3"></textarea>
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