@extends('layouts.master')


@section('title', 'specialties')

@section('pageName', 'Specialties Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Specialties Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('specialties.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>Parent ID</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            {{-- @if ($specialties->count(0)) --}}
            @forelse ($specialties as $specialty)
                <tr>
                    <td>{{ $specialty->id }}</td>
                    <td>{{ $specialty->name }}</td>
                    <td>{{ $specialty->parent_id }}</td>
                    <td>
                        <a href="{{ route('specialties.edit', $specialty->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('specialties.destroy', $specialty->id) }}" method="post">
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
                    <td colspan="7"> No specialties defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
