@extends('layouts.master')


@section('title', 'specialties')

@section('pageName', 'Specialty Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Specialty Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('specialties.index') }}" class="btn btn-sm btn-outline-primary">All Specialties</a>
    </div>

    <form action="{{ route('specialties.update', $specialty->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.specialties._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
