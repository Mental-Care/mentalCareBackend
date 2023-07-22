@extends('layouts.master')


@section('title', 'quizzes')

@section('pageName', 'Quiz Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Quiz Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('quizzes.index') }}" class="btn btn-sm btn-outline-primary">All Quiz</a>
    </div>

    <form action="{{ route('quizzes.update', $quiz->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.quizzes._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
