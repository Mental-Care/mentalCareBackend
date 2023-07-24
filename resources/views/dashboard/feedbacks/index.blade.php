@extends('layouts.master')

@section('title', 'feedbacks')

@section('pageName', 'Feedbacks Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Feedbacks Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('feedbacks.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>user_id</th>
                <th>therapist_id</th>
                <th>rate</th>
                <th>text</th>
                <th>date</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->id }}</td>
                    <td>{{ $feedback->user_id }}</td>
                    <td>{{ $feedback->therapist_id }}</td>
                    <td>{{ $feedback->rate }}</td>
                    <td>{{ $feedback->text }}</td>
                    <td>{{ $feedback->date }}</td>
                    <td>
                        <a href="{{ route('feedbacks.edit', $feedback->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('feedbacks.destroy', $feedback->id) }}" method="post">
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
                    <td colspan="7"> No feedbacks defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
