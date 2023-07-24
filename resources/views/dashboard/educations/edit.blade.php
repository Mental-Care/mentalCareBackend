@extends('layouts.master')


@section('title', 'educations')

@section('pageName', 'Education Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Education Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('educations.index') }}" class="btn btn-sm btn-outline-primary">All Educations</a>
    </div>

    <form action="{{ route('educations.update', $education->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.educations._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
