@extends('layouts.master')


@section('title', 'therapists')

@section('pageName', 'Therapists Page')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Therapists Page</li>
@endsection

@section('content')

    <div class="mb-5">
        <a href="{{ route('therapists.create') }}" class="btn btn-sm btn-outline-primary">Create New</a>
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
                    <th
                        style="width: 10px !import; border-bottom: 1px solid black;position: sticky; left: 0; background-color: #f4f6f9;">
                        name-id
                    </th>
                    <th>specialty_id</th>
                    <th>subSpecialty_id</th>
                    <th>interests_id</th>
                    <th>language</th>
                    <th>country</th>
                    <th>address</th>
                    <th>sessions</th>
                    <th>rate</th>
                    <th>review</th>
                    <th>communicationSkills</th>
                    <th>effectiveSolutions</th>
                    <th>understandSituation</th>
                    <th>CommitmentSessionDates</th>
                    <th>date</th>
                    <th>time</th>
                    <th>price_60</th>
                    <th>price_30</th>
                    <th>isPsychotherapy</th>
                    <th>Connected</th>
                    <th>isBestTherapist</th>
                    <th>image</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($therapists as $therapist)
                    <tr>
                        <td>{{ $therapist->id }}</td>
                        <td style="position: sticky; left: 0; background-color: #f4f6f9; ">
                            {{ $therapist->user->name . '-' . $therapist->user_id }}</td>
                        <td>{{ $therapist->specialty_id }}</td>
                        <td>{{ $therapist->subSpecialty_id }}</td>
                        <td>{{ $therapist->interests_id }}</td>
                        <td>{{ $therapist->language }}</td>
                        <td>{{ $therapist->country }}</td>
                        <td>{{ $therapist->address }}</td>
                        <td>{{ $therapist->sessions }}</td>
                        <td>{{ $therapist->rate }}</td>
                        <td>{{ $therapist->review }}</td>
                        <td>{{ $therapist->communicationSkills }}</td>
                        <td>{{ $therapist->effectiveSolutions }}</td>
                        <td>{{ $therapist->understandSituation }}</td>
                        <td>{{ $therapist->CommitmentSessionDates }}</td>
                        <td>{{ $therapist->date }}</td>
                        <td>{{ $therapist->time }}</td>
                        <td>{{ $therapist->price_60 }}</td>
                        <td>{{ $therapist->price_30 }}</td>
                        <td>{{ $therapist->isPsychotherapy }}</td>
                        <td>{{ $therapist->Connected }}</td>
                        <td>{{ $therapist->isBestTherapist }}</td>
                        <td>
                            <img src="{{ asset('uploads/therapists/' . $therapist->image) }}" alt=""
                                height="50">
                        </td>
                        <td>
                            <a href="{{ route('therapists.edit', $therapist->id) }}"
                                class="btn btn-sm btn-outline-success">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('therapists.destroy', $therapist->id) }}" method="post">
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
                        <td colspan="7"> No therapists defind.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <br>
    {{ $therapists->links() }}

@endsection

{{-- @push('style')
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
@endpush --}}
