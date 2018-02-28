@extends('app', ['page_class' => 'home'])


@section('modal-body')
    <h1>Test</h1>
@stop


@section('modal')
    @include('partials.modal')
@stop



@section('content')
    <div class="block">
        <div class="content">
            <h1 class="page-title">Header</h1>
        </div>
    </div>
    <div class="block">
        <div class="content">
            <h2>Block 1</h2>
            <p class="pt-sm">This is the first block</p>
        </div>
    </div>
    <div class="block">
        <div class="content">
            <h2>Block 2</h2>
            <p class="py-sm">This is the second block</p>
            <p class="modal-item"><img src="{{ asset('images/test-landscape.jpg') }}" alt="Beautiful Landscape"</p>
        </div>
    </div>
    <div class="block">
        <div class="content">
            <h2>Block 3</h2>
            <p class="py-sm">This is the third block</p>
            <a class="modal-toggle" href="#"><button class="btn">Click Here</button></a>
        </div>
    </div>
@stop


@section('js')
    <script src="{{ url('/js/home.js') }}"></script>
@stop
