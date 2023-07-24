@extends('layouts.master')


@section('title', 'schedules')

@section('pageName', 'Schedule Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Schedule Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('schedules.index') }}" class="btn btn-sm btn-outline-primary">All Schedules</a>
    </div>

    <form action="{{ route('schedules.update', $schedule->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.schedules._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
