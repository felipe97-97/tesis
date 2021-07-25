@extends('layouts.app')

@section('content')
<hr>
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group row">
        <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"  style="margin-top: 20px; padding: 25px 20px;"
            id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Correo Electrónico" 
            value="{{ old('email') }}" 
            name="email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

    </div>

    <div class="form-group row">
        <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
            id="exampleInputPassword" 
            placeholder="Contraseña"
            name="password" required autocomplete="current-password" style="padding: 25px 20px">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-primary btn-user btn-block" style="margin: 20px 0px; height: 50px">
                {{ __('Entrar') }}
            </button>
        </div>
    </div>
    <hr>
</form>
@endsection
