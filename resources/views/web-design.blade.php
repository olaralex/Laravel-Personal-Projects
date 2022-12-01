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
                <a href="/">
                    <img class="logo" src="/images/front-end.jpg" alt="fornt-end-logo">
                </a>
                <h1>Fornt-End Developer{{ $copywrite }}</h1>
            </div>

            <ul>
                <li>
                    <h3><a href="/services">Services</a></h3>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/services">Services</a>
                        </div>
                    </div>
                </li>
            </ul>
        </header>

        <div class="container p-5">
            <h1>
                {{ $title }}
            </h1>

            <p>
                Lorem ipsum
            </p>
            <div class="add-cart">
                <button type="button" class="btn btn-outline-dark">
                    Add To Cart
                </button>
            </div>
        </div>

@endsection
