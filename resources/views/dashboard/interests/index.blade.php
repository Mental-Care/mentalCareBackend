@extends('layouts.master')


@section('title', 'interests')

@section('pageName', 'Interests Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Interests Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('interests.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>Name</th>
                <th>User ID</th>
            </tr>
        </thead>
        <tbody>
            {{-- @if ($interests->count(0)) --}}
            @forelse ($interests as $interest)
                <tr>
                    <td>{{ $interest->id }}</td>
                    <td>{{ $interest->name }}</td>
                    <td>{{ $interest->user_id }}</td>
                    <td>
                        <a href="{{ route('interests.edit', $interest->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('interests.destroy', $interest->id) }}" method="post">
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
                    <td colspan="7"> No interests defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
