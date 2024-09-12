@extends('layouts/app')

@section('content')
    <x-sidebar />
    <div class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:ps-72">
        <h2 class="my-6 text-2xl font-semibold text-gray-700">
            @yield('section-title')
        </h2>
        @yield('section-content')
    </div>
@endsection
