@extends('layouts.master')

@section('title', 'users')

@section('pageName', 'User Create')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">User Page</li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary">All Users</a>
    </div>

    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        {{-- two way to solve old data issue in form  --}}
        {{-- first use ( $category->name ?? '' )  its quick if-else --}}
        {{-- second  pass empty object in variable $category in Controller --}}
        {{-- second better --}}
        @include('dashboard.users._form', [
            'button_label' => 'Create',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
