@extends('layouts.master')

@section('title', 'educations')

@section('pageName', 'Educations Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Educations Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('educations.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
            @forelse ($educations as $education)
                <tr>
                    <td>{{ $education->id }}</td>
                    <td>{{ $education->user_id }}</td>
                    <td>{{ $education->title }}</td>
                    <td>{{ $education->place }}</td>
                    <td>{{ $education->fromDate }}</td>
                    <td>{{ $education->toDate }}</td>
                    <td>
                        <a href="{{ route('educations.edit', $education->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('educations.destroy', $education->id) }}" method="post">
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
                    <td colspan="7"> No educations defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
