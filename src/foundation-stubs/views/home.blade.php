@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="form-container small-6 small-centered columns">

            <div class="form-title text-center">
                {{ __('Dashboard') }}
            </div>

            <div class="callout">
                {{ __('You are logged in!') }}
            </div>

        </div>

    </div>

</div>

@endsection
