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
                    <h1>Fornt-End Developer{{ $copywrite }}</h1>
                </div>

                <ul>
                    <li>
                        <h3><a href="/">Home Page</a></h3>
                    </li>
                </ul>
            </header>

            <div class="container">

                <h2>Services:</h2>
                    @foreach ($services as $service)
                            <div class="p-5">
                                <a href="/services/{{ $service['type'] }}">
                                    <p>
                                        {{$loop -> index+1}}. {{ $service['type'] }} - {{ $service['price'] }}
                                        @if($loop -> first)
                                             - the favorite
                                        @endif
                                        @if($loop -> last)
                                            - most effective
                                        @endif
                                    </p>
                                </a>
                            </div>
                    @endforeach
            </div>

@endsection
