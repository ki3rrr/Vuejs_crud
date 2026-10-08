@extends('layouts.app')

@section('title', 'Add Doctor')

@section('content')
<h4>Add Doctor</h4>

@if($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('doctors.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
        <label for="specialization" class="form-label">Specialization</label>
        <input type="text" id="specialization" class="form-control" name="specialization" value="{{ old('specialization') }}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone') }}">
    </div>

    <button type="submit" class="btn btn-primary">Save Doctor</button>
    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
