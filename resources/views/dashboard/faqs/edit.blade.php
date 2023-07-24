@extends('layouts.master')


@section('title', 'faqs')

@section('pageName', 'Faq Edit')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Faq Edit</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('faqs.index') }}" class="btn btn-sm btn-outline-primary">All Faqs</a>
    </div>

    <form action="{{ route('faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('dashboard.faqs._form', [
            'button_label' => 'Update',
        ])
    </form>
@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
