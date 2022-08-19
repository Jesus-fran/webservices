 @extends('index')

 {{-- @section('menu')
 <div class="col-md-4 offset-md-4 bg-success text-center">
    <div class="card bg-success" >
      <div class="card-body">
        <form class="row g-3 needs-validation" novalidate>
          
          <div class="col-12">
            <label for="validationCustomUsername" class="form-label">Correo</label>
            <div class="input-group">
              <span class="input-group-text" id="inputGroupPrepend">@</span>
              <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
              <div class="invalid-feedback">
                Elige tu correo electrónico
              </div>
            </div>
          </div>
          <div class="col-12">
            <label for="validationCustom03" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Ingresar</button>
          </div>
        </form>
      </div>
    </div>
 </div>
 @endsection --}}

 @section('contenido_gnrl')
    <div class="row row_login">
        <div class="col-md-4 offset-md-4 col-login text-center text-dark p-1 ">
            <span style="color:red;">{{$msgErr ?? '' }}</span>
            <div class="card bg-light" >
                <div class="card-body">
              
                  <form class="row g-3 needs-validation" action="{{ route('ini-sesion')}}" method="POST">
                    @csrf
                    <div class="col-12">
                      <label for="validationCustomUsername" class="form-label h6">Correo</label>
                      <div class="input-group">
                        <input type="email" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          {{-- Ingrese su correo electrónico --}}
                          {{$msgErr ?? '' }}
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <label for="validationCustom03" class="form-label h6">Contraseña</label>
                      <input type="password" class="form-control" name="password" id="validationCustom03" required>
                      <div class="invalid-feedback">
                        Ingrese una contraseña correcta
                      </div>
                    </div>
                    
                    <div class="col-12">
                      <button class="btn btn-login  hvr-hang " type="submit">Ingresar</button>
                    </div>
                    <div class="col-12">
                      <a href="{{ route('aviso-privacidad') }}" class="link-aviso-priv">Aviso de privacidad</a> <br> y <br> <a href="" class="link-aviso-priv">Terminos de uso</a>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
 @endsection