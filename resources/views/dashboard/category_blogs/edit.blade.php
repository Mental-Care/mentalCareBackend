@extends('layouts.master')


@section('title', 'category_blogs')

@section('pageName', 'Category_blog Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Category_blog Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('category_blogs.index') }}" class="btn btn-sm btn-outline-primary">All Category_blogs</a>
    </div>

    <form action="{{ route('category_blogs.update', $category_blog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.category_blogs._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
