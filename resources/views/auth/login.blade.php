@extends('layouts.login')

@section('content')
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <h2 class="sr-only">Login Form</h2>
                            <div class="illustration">
                                <div class="form-row">
                                    <div class="col" style="margin: 0;margin-top: -100px;margin-bottom: -20px;"><span style="font-size: 34px;color: rgb(59,97,209);font-family: Capriola, sans-serif;">LOGIN</span></div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus placeholder="Username">

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color: rgb(59,97,209);">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div style="margin-left: 100px"><a href="tambahpeserta">Daftar</a></div>
                    </form>

@endsection
