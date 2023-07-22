@extends('layouts.master')

@section('title', 'res')

@section('pageName', 'Res Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Res Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('res.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>name</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($res as $re)
                <tr>
                    <td>{{ $re->id }}</td>
                    <td>{{ $re->name }}</td>
                    <td>
                        <a href="{{ route('res.edit', $re->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('res.destroy', $re->id) }}" method="post">
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
                    <td colspan="7"> No res defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
