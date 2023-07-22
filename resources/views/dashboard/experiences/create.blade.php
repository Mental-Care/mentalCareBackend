@extends('layouts.master')

@section('title', 'experiences')

@section('pageName', 'Experience Create')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Experience Page</li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('experiences.index') }}" class="btn btn-sm btn-outline-primary">All Experiences</a>
    </div>

    <form action="{{ route('experiences.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- two way to solve old data issue in form  --}}
        {{-- first use ( $category->name ?? '' )  its quick if-else --}}
        {{-- second  pass empty object in variable $category in Controller --}}
        {{-- second better --}}
        @include('dashboard.experiences._form')
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
