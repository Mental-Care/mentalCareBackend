@extends('layouts.master')


@section('title', 'quizzes_questions')

@section('pageName', 'Quizzes_question Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Quizzes_question Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('quizzes_questions.index') }}" class="btn btn-sm btn-outline-primary">All Quizzes_questions</a>
    </div>

    <form action="{{ route('quizzes_questions.update', $quizzes_question->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.quizzes_questions._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
