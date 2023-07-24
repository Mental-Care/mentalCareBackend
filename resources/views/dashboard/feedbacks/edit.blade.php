@extends('layouts.master')


@section('title', 'feedbacks')

@section('pageName', 'Feedback Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Feedback Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('feedbacks.index') }}" class="btn btn-sm btn-outline-primary">All Feedbacks</a>
    </div>

    <form action="{{ route('feedbacks.update', $feedback->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.feedbacks._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
