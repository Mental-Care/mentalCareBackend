@extends('layouts.master')

@section('title', 'res_questions')

@section('pageName', 'Res_questions Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Res_questions Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('res_questions.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>res_id</th>
                <th>question</th>
                <th>opt1</th>
                <th>opt2</th>
                <th>opt3</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($res_questions as $res_question)
                <tr>
                    <td>{{ $res_question->id }}</td>
                    <td>{{ $res_question->res_id }}</td>
                    <td>{{ $res_question->question }}</td>
                    <td>{{ $res_question->opt1 }}</td>
                    <td>{{ $res_question->opt2 }}</td>
                    <td>{{ $res_question->opt3 }}</td>
                    <td>
                        <a href="{{ route('res_questions.edit', $res_question->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('res_questions.destroy', $res_question->id) }}" method="post">
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
                    <td colspan="7"> No res_questions defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
