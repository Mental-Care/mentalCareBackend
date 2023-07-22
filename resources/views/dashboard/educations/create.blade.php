@extends('layouts.master')

@section('title', 'educations')

@section('pageName', 'Education Create')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Education Page</li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('educations.index') }}" class="btn btn-sm btn-outline-primary">All Educations</a>
    </div>

    <form action="{{ route('educations.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- two way to solve old data issue in form  --}}
        {{-- first use ( $category->name ?? '' )  its quick if-else --}}
        {{-- second  pass empty object in variable $category in Controller --}}
        {{-- second better --}}
        @include('dashboard.educations._form')
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
