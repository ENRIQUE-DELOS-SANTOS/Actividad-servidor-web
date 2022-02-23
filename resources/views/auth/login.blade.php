@extends('layouts.app')

@section('content')

<body style=" background-image: url('img/1111.jpg');" >
<div class="container bg-image">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2" >
            <div class="panel panel-default" style="background: rgba(0,0,0,0.5);">
				
                <div class="panel-heading">
					<img src="img/11.png" alt="Avatar" style="width:50px" class=" w3-margin-top">
					INICIAR SESION
				</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label" style="color:#3096d0">CORREO ELECTRONICO</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label" style="color:#3096d0">CONTRASEÑA</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label style="color:#3096d0">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> RECORDARME
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                  INGRESAR
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    OLVIDASTE TU CONTRASENA?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection
