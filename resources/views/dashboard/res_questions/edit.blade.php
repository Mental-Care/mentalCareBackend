@extends('layouts.master')


@section('title', 'res_questions')

@section('pageName', 'Res_question Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Res_question Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('res_questions.index') }}" class="btn btn-sm btn-outline-primary">All Res_questions</a>
    </div>

    <form action="{{ route('res_questions.update', $res_question->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.res_questions._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
