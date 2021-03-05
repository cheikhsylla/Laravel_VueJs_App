@extends('layouts.navBar')

@section('content')
    <div id="app" >

        <div class="container">
            <Home/>
        </div>
        <script src="{{ asset('js/app.js') }}" ></script>

    </div>

@endsection
