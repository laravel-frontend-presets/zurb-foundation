@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <div class="status_message">
                @if (session('status'))
                    <div class="callout">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <div class="form-title text-center">
                {{ __('Reset Password') }}
            </div>

            <form class="password-reset-form" method="POST" action="{{ route('password.request') }}">

                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

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
                    <label for="password">Password</label>

                    <input id="password" type="password" name="password" aria-describedby="passwordHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="password">
                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" name="password_confirmation" aria-describedby="passwordConfirmHelpText" required>

                    @if ($errors->has('password'))
                        <span class="help-text" id="passwordConfirmHelpText">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="reset-button">
                    <button type="submit" class="button">
                        {{ __('Reset Password') }}
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
