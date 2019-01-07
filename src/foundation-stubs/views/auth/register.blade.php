@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <div class="form-title text-center">
                Register
            </div>

            <form class="register-form" method="POST" action="{{ route('register') }}">

                {{ csrf_field() }}

                <div class="name">
                    <label for="email">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" aria-describedby="nameHelpText" required autofocus>

                    @if ($errors->has('name'))
                        <span class="help-text" id="nameHelpText">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="email">
                    <label for="email">{{ __('E-Mail Address') }}</label>

                    <input id="email" type="email" name="email" value="{{ old('email') }}" aria-describedby="emailHelpText" required>

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

                <div class="password-confirm">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>

                <div class="register_button">
                    <button type="submit" class="button">
                        {{ __('Register') }}
                    </button>
                </div>


            </form>

        </div>

    </div>

</div>

@endsection
