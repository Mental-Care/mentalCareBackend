@extends('layouts.master')


@section('title', 'blogs')

@section('pageName', 'Blog Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Blog Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('blogs.index') }}" class="btn btn-sm btn-outline-primary">All Blogs</a>
    </div>

    <form action="{{ route('blogs.update', $blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.blogs._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
