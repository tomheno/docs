@extends('_layouts.base')

@section('header')
    header
@endsection

@section('main')
    <div class="max-w-screen-xl px-4 py-6 mx-auto lg:px-6 lg:grid lg:grid-cols-5 lg:gap-10">
        <nav>
            nav
        </nav>
        <div class="lg:col-span-3">
            <div class="prose lg:prose-lg">
                @yield('content')
            </div>
        </div>
    </div>
@endsection