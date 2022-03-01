@extends('_layouts.app')

@section('body')
    <div class="container d-flex flex-column min-vh-100">
        <x-header />
        <main class="flex-fill">
            @yield('main')
        </main>
        <x-footer />
    </div>
@endsection
