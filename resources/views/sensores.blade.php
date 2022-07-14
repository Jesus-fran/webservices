@extends('index')
@section('contenido')
<br>
<div class="row">
    <div class="col-12 text-center">
        <h6>Sensores</h6>
        <br>
        <br>
        <br>
    </div>
    <div class="col-md-3 col-sm-5 col-xs-3 text-center">
        <div class="card">
         <img src="{{ asset('imagenes/sensores/sensor_humedad.jpg') }}" class="img-fluid img-thumbnail img-sensores" alt="Sensor de humedad" srcset=""> 
         <div class="card-body">
         <h6>Higrómetro</h6>
 
             <ul>
                 <li>Encendido: {{$higrometro['activo']}}</li>
                 <li>Fecha: {{$higrometro['fecha']}} </li>
                 <li>Hora: {{$higrometro['hora']}}</li>
             </ul>
          </div>
        </div>
     </div>
 
     <div class="col-md-3 col-sm-5 col-xs-3 text-center">
         <div class="card">
         <img src="{{ asset('imagenes/sensores/minibomba.jpg') }}" class="img-fluid img-thumbnail img-sensores" alt="Minibomba de agua" srcset=""> 
 
           <div class="card-body">
              <h6>Minibomba</h6>
              <ul>
                <li>Encendido: {{$minibomba['activo']}}</li>
                <li>Fecha: {{$minibomba['fecha']}} </li>
                <li>Hora: {{$minibomba['hora']}}</li>
              </ul>
           </div>
         </div>
      </div>
 
      <div class="col-md-3  col-sm-5 col-xs-3 text-center">
         <div class="card">
         <img src="{{ asset('imagenes/sensores/sensor_luminosidad.jpg') }}" class="img-fluid img-thumbnail img-sensores" alt="Sensor de luminosidad" srcset=""> 
           <div class="card-body">
              <h6>Sensor de luminosidad</h6>
              <ul>
                <li>Encendido: {{$sen_lumi['activo']}}</li>
                <li>Fecha: {{$sen_lumi['fecha']}} </li>
                <li>Hora: {{$sen_lumi['hora']}}</li>
              </ul>
           </div>
         </div>
      </div>
</div>
@endsection