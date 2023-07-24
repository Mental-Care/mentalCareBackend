@extends('layouts.master')

@section('title', 'experiences')

@section('pageName', 'Experiences Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Experiences Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('experiences.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>title</th>
                <th>place</th>
                <th>fromDate</th>
                <th>toDate</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($experiences as $experience)
                <tr>
                    <td>{{ $experience->id }}</td>
                    <td>{{ $experience->user_id }}</td>
                    <td>{{ $experience->title }}</td>
                    <td>{{ $experience->place }}</td>
                    <td>{{ $experience->fromDate }}</td>
                    <td>{{ $experience->toDate }}</td>
                    <td>
                        <a href="{{ route('experiences.edit', $experience->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('experiences.destroy', $experience->id) }}" method="post">
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
                    <td colspan="7"> No experiences defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
