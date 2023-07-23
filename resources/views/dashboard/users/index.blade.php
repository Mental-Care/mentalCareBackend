@extends('layouts.master')

@section('title', 'users')

@section('pageName', 'Users Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Users Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
    <div style="overflow-x: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>address</th>
                    <th>role</th>
                    <th>gender</th>
                    <th>date</th>
                    <th>image</th>
                    <th>number</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->date }}</td>
                        <td>
                            <img src="{{ asset('uploads/users/' . $user->image) }}" alt="" height="50">
                        </td>
                        <td>{{ $user->number }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
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
                        <td colspan="7"> No users defind.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <br>
    {{ $users->links() }}
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
