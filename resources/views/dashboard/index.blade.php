@extends('layouts.master')


@section('title', 'my page')

@section('pageName', 'Starter Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Starter Page</li>
@endsection
