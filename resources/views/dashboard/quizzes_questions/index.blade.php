@extends('layouts.master')

@section('title', 'quizzes_questions')

@section('pageName', 'Quizzes_questions Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Quizzes_questions Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('quizzes_questions.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif

    {{-- table.table>thead>tr>th*4 --}}
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>quizze_id</th>
                <th>opt1</th>
                <th>opt2</th>
                <th>opt3</th>
                <th>opt4</th>
                <th>ans</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($quizzes_questions as $quizzes_question)
                <tr>
                    <td>{{ $quizzes_question->id }}</td>
                    <td>{{ $quizzes_question->quizze_id }}</td>
                    <td>{{ $quizzes_question->opt1 }}</td>
                    <td>{{ $quizzes_question->opt2 }}</td>
                    <td>{{ $quizzes_question->opt3 }}</td>
                    <td>{{ $quizzes_question->opt4 }}</td>
                    <td>{{ $quizzes_question->ans }}</td>
                    <td>
                        <a href="{{ route('quizzes_questions.edit', $quizzes_question->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('quizzes_questions.destroy', $quizzes_question->id) }}" method="post">
                            @csrf
                            {{-- Form Method Spoofing --}}
                            {{-- <input type="hidden" name="_method" value="delete"> --}}
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="7"> No quizzes_questions defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
