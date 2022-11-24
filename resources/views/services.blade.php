@extends('layouts.layout')

@section('content')
<div class="min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <header class="flex">
                <div class="flex text-center">
                    <img class="logo" src="/images/front-end.jpg" alt="fornt-end-logo">
                    <h1>
                        Fornt-End Developer{{ $copywrite }}
                    </h1>
                </div>

                <ul>
                    <li>
                        <h3>
                            <a class="" href="/">Home Page</a>
                        </h3>
                    </li>
                </ul>
            </header>

            <!--
            <div class="container">

                <h2>Services:</h2>
                    @foreach ($services as $service)
                            <div>
                                <a href="services/{{ $service->type }}">
                                    {{ $service->name }} - {{ $service->type }} - {{ $service->price }}
                                </a>
                            </div>
                    @endforeach
            </div>
            -->

            <div class="container p-5">
                <div class="title pb-5">
                    <h2>
                        What We Offer
                    </h2>
                </div>
                <div class="row p-3 border">
                    @foreach ($services as $service)
                        <div class="col-sm-12 col-md-4 p-1 bg-light border">
                            <h4 class="p-1">
                                {{strtoupper( $service->type )}}
                            </h4>
                            <br>
                            <p>
                                We are offering one of the best <strong>{{ $service->type }}</strong> you can have, click on the button down bellow and see more...
                            </p>
                            <a class="btn btn-outline-dark p-1" href="services/{{ $service->type }}" role="button">{{strtoupper( $service->type )}}</a>
                        </div>
                    @endforeach
                </div>
            </div>

@endsection
