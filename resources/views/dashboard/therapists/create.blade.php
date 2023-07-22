@extends('layouts.master')

@section('title', 'therapists')

@section('pageName', 'Therapists Create')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Therapists Page</li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('therapists.index') }}" class="btn btn-sm btn-outline-primary">All Therapists</a>
    </div>

    <form action="{{ route('therapists.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- two way to solve old data issue in form  --}}
        {{-- first use ( $category->name ?? '' )  its quick if-else --}}
        {{-- second  pass empty object in variable $category in Controller --}}
        {{-- second better --}}
        @include('dashboard.therapists._form')
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
