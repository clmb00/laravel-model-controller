@extends('layout.layout')

@section('title')
    Error 404
@endsection

@section('content')
    <div class="bg-danger p-3 my-3 mx-5 ps-4 rounded-5 text-white text-center">
        <h5 class="fw-bolder">Error 404!</h5>
        <p>{{ $exception->getMessage() }}</p>
    </div>
@endsection
