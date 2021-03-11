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
                            <div class="card-header">Registro <!--{ __('Register') }}--></div>
                        </a>
                    </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="panel-01">
                    <div class="panel-body">
                        <div class="form-row">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div>
                                        <img src="{{asset('storage/images/Moralogo.jpg')}}" alt="">
                                    </div>
                                    <br>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">
                                          <!--  { __('Name') }} -->
                                            Nombre:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">
                                            <!--{ __('E-Mail Address') }} -->
                                            Correo institucional:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">
                                            <!--{ __('Password') }}-->
                                            Contraseña:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                            <!--{ __('Confirm Password') }}-->
                                            Confirmar contraseña:
                                        </label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                <!--{ __('Register') }}-->
                                                Registrarse
                                            </button>
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
