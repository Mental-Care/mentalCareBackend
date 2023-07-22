@extends('layouts.master')


@section('title', 'users')

@section('pageName', 'User Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">User Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('users.index') }}" class="btn btn-sm btn-outline-primary">All Users</a>
    </div>

    <form action="{{ route('users.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.users._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
