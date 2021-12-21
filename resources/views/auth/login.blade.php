@extends('layouts.app')

@section('content')
<div class="container-fluid d-flex">
    <div class="row flex-fill">
        <div class="col-md-5 logMain ">
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Adresa') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Lozinka') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Zapamti me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Prijavi se') }}
                        </button>
                        
                        @if (Route::has('password.request'))
                            <a class="btn btn-link link-light" href="{{ route('password.request') }}">
                                {{ __('Zaboravili ste lozinku?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
            <hr>
        </div>
        <div class="col-md-7 logBac">

        </div>
    </div>
</div>
@endsection
