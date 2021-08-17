@extends('layouts.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">

        </div>
        <div class="col-md-8" align="center">
            <div class="panel-group ficha-collapse" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-parent="#accordion" data-toggle="collapse" href="#panel-01" aria-expanded="true" aria-controls="panel-01">                           
                            <div class="card-header">{{ __('Login') }}</div>
                        </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="panel-01">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div>
                                        <img src="{{asset('storage/images/Moralogo.jpg')}}" alt="">
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="username" class="col-md-4 col-form-label text-md-right">
                                            <!--{ __('E-Mail Address') }} -->
                                            Correo electrónico:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
            
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">
                                           <!-- { __('Password') }}-->
                                           Contraseña:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    Recordarme
                                                 <!--   { __('Remember Me') }} -->
                                                </label>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
            
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                   <!-- { __('Forgot Your Password?') }} -->
                                                    ¿Olvidaste tu contraseña?
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">

        </div>
    </div>
</div>
@endsection






