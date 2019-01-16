@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <div class="form-title text-center">
                Login
            </div>

            <form class="login-form" method="POST" action="{{ route('login') }}">

                {{ csrf_field() }}

                <div class="email">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-text" id="emailHelpText">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password">
                    <label for="password">{{ __('Password') }}</label>

                    <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                    </label>
                </div>

                <div class="button-plus-link">
                    <button type="submit" class="button">
                        {{ __('Login') }}
                    </button>

                    <a href="{{ route('password.request') }}">
                        &nbsp;
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </form>

        </div>

    </div>

</div>
@endsection
