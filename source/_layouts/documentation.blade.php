@extends('_layouts.base')

@section('body')
    <div class="container p-4 bg-white">
        <div class="prose lg:prose-lg">
            @yield('content')
        </div>
    </div>
@endsection