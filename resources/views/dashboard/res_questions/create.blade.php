@extends('layouts.master')

@section('title', 'res_questions')

@section('pageName', 'Res_question Create')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Res_question Page</li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('res_questions.index') }}" class="btn btn-sm btn-outline-primary">All Res_questions</a>
    </div>

    <form action="{{ route('res_questions.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- two way to solve old data issue in form  --}}
        {{-- first use ( $category->name ?? '' )  its quick if-else --}}
        {{-- second  pass empty object in variable $category in Controller --}}
        {{-- second better --}}
        @include('dashboard.res_questions._form')
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
