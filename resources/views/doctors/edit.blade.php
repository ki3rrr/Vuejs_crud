@extends('layouts.app')

@section('title', 'Edit Doctor')

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="mb-0">Edit Doctor</h4>
    </div>

    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Doctor Name</label>
                <input type="text" name="name" value="{{ old('name', $doctor->name) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Specialization</label>
                <input type="text" name="specialization" value="{{ old('specialization', $doctor->specialization) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="{{ old('email', $doctor->email) }}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="text" name="phone" value="{{ old('phone', $doctor->phone) }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update Doctor</button>
            <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
