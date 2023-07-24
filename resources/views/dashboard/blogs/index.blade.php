@extends('layouts.master')

@section('title', 'blogs')

@section('pageName', 'Blogs Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Blogs Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                <th>categoryBlogs_id</th>
                <th>subCategoryBlogs_id</th>
                <th>description</th>
                <th>cover</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->user_id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->categoryBlogs_id }}</td>
                    <td>{{ $blog->subCategoryBlogs_id }}</td>
                    <td>{{ $blog->description }}</td>
                    <td>
                        <img src="{{ asset('uploads/blogs/' . $blog->cover) }}" alt="" height="50">
                    </td>
                    <td>
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-outline-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
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
                    <td colspan="7"> No blogs defind.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
