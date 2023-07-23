@extends('layouts.master')

@section('title', 'category_blogs')

@section('pageName', 'Category_blogs Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Category_blogs Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('category_blogs.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($category_blogs as $category_blog)
                <tr>
                    <td>{{ $category_blog->id }}</td>
                    <td>{{ $category_blog->name }}</td>
                    <td>
                        <a href="{{ route('category_blogs.edit', $category_blog->id) }}"
                            class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('category_blogs.destroy', $category_blog->id) }}" method="post">
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
                    <td colspan="7"> No category_blogs defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
