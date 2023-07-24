@extends('layouts.master')


@section('title', 'res')

@section('pageName', 'Res Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Res Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('res.index') }}" class="btn btn-sm btn-outline-primary">All Res</a>
    </div>

    <form action="{{ route('res.update', $res->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.res._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
