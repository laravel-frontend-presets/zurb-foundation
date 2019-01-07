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

            <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">

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

                <div class="send-button">
                    <button type="submit" class="button">
                        {{ __('Send Password Reset Link') }}
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>

@endsection
