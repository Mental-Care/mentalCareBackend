@extends('layouts.master')


@section('title', 'therapists')

@section('pageName', 'Therapists Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Therapists Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('therapists.index') }}" class="btn btn-sm btn-outline-primary">All Therapists</a>
    </div>

    <form action="{{ route('therapists.update', $therapist->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.therapists._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
