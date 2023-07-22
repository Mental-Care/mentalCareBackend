@extends('layouts.master')


@section('title', 'experiences')

@section('pageName', 'Experience Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Experience Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('experiences.index') }}" class="btn btn-sm btn-outline-primary">All Experiences</a>
    </div>

    <form action="{{ route('experiences.update', $experience->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.experiences._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
