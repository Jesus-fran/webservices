@extends('index')
@section('contenido')
<br>
<br>
<div class="row">
    <div class="col-md-3 col-sm-6 text-center">
       <div class="card">
        <img src="{{ asset('imagenes/plantas/cafe.jpg') }}" class="img-fluid img-thumbnail" alt="Planta de café" srcset=""> 
        <div class="card-body">
        <h6>Planta de café</h6>

            <ul>
                <li>Humedad: {{$planta1[0]['humedad']['valor']}}</li>
                <li>Luminosidad: {{$planta1[1]['luminosidad']['valor']}}</li>
                <li>Temperatura: {{$planta1[2]['temperatura']['valor']}}</li>
            </ul>
         </div>
       </div>
    </div>

    <div class="col-md-3 col-sm-6 text-center">
        <div class="card">
        <img src="{{ asset('imagenes/plantas/maiz.webp') }}" class="img-fluid img-thumbnail" alt="Planta de maiz" srcset=""> 

          <div class="card-body">
             <h6>Planta de maiz</h6>
             <ul>
                 <li>Humedad: {{$planta2[0]['humedad']['valor']}}</li>
                 <li>Luminosidad: {{$planta2[1]['luminosidad']['valor']}}</li>
                 <li>Temperatura: {{$planta2[2]['temperatura']['valor']}}</li>
             </ul>
          </div>
        </div>
     </div>

     <div class="col-md-3  col-sm-6 text-center">
        <div class="card">
        <img src="{{ asset('imagenes/plantas/frijol.jpg') }}" class="img-fluid img-thumbnail" alt="Planta de frijol" srcset=""> 
          <div class="card-body">
             <h6>Planta de frijol</h6>
             <ul>
                 <li>Humedad: {{$planta3[0]['humedad']['valor']}}</li>
                 <li>Luminosidad: {{$planta3[1]['luminosidad']['valor']}}</li>
                 <li>Temperatura: {{$planta3[2]['temperatura']['valor']}}</li>
             </ul>
          </div>
        </div>
     </div>
</div>
@endsection