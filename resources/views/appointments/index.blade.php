@extends('layouts.app')

@section('title', 'Appointments')

@section('content')

<h3>List of Appointments</h3>

<a href="{{ route('appointments.create') }}"
   class="btn btn-primary">
    Add Appointment
</a>

@if(session('success'))

<div class="alert alert-success">
    {{ session('success') }}
</div>

@endif

<table class="table table-striped mt-3">

    <thead>
        <tr>
            <th>Patient</th>
            <th>Doctor</th>
            <th>Appointment Date</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

        @forelse($appointments as $appointment)

        <tr>
            <td>
                {{ $appointment->patient?->name ?? 'N/A' }}
            </td>

            <td>
                {{ $appointment->doctor?->name ?? 'N/A' }}
            </td>

            <td>
                {{ $appointment->appointment_date?->format('M d, Y') }}
            </td>

            <td>
                {{ $appointment->status }}
            </td>

            <td>

                <a href="{{ route('appointments.edit', $appointment->id) }}"
                   class="btn btn-warning">
                    Edit
                </a>

                <form
                    action="{{ route('appointments.destroy', $appointment->id) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this appointment?')">
                        Delete
                    </button>

                </form>

            </td>
        </tr>

        @empty
        <tr><td colspan="5" class="text-center text-muted">No appointments found.</td></tr>
        @endforelse

    </tbody>

</table>

@endsection