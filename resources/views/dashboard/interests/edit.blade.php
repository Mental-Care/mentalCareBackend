@extends('layouts.master')


@section('title', 'categories')

@section('pageName', 'Category Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Category Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('interests.index') }}" class="btn btn-sm btn-outline-primary">All Categories</a>
    </div>

    <form action="{{ route('interests.update', $interest->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.interests._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
