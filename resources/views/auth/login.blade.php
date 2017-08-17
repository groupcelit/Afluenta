@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Ingresar</div>
                <div class="panel-body">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <h4 align="center">Ingresa con tu Email</h4>
                        @if ($status = Session::get('status'))
                            <div class="alert alert-info">
                                {{$status}}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="">Correo eletronico</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="">Contraseña</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>
                                    <a class="btn btn-primary" href="{{ route('facebook.login') }}">
                                        Ingresa con Facebook
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('google.login') }}">
                                        Ingresa con Gmail
                                    </a>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvidaste la contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
