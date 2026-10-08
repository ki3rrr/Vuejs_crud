@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h1 class="mb-4">Dashboard</h1>

<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card text-center"><div class="card-body">
            <h6 class="text-muted">Total Doctors</h6>
            <h2>{{ $doctorCount }}</h2>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card text-center"><div class="card-body">
            <h6 class="text-muted">Total Patients</h6>
            <h2>{{ $patientCount }}</h2>
        </div></div>
    </div>
    <div class="col-md-4">
        <div class="card text-center"><div class="card-body">
            <h6 class="text-muted">Total Appointments</h6>
            <h2>{{ $appointmentCount }}</h2>
        </div></div>
    </div>
</div>

<h4>Recent Appointments</h4>
<table class="table table-striped">
    <thead>
        <tr><th>Patient</th><th>Doctor</th><th>Date</th><th>Status</th></tr>
    </thead>
    <tbody>
        @forelse($recentAppointments as $appointment)
        <tr>
            <td>{{ $appointment->patient?->name ?? 'N/A' }}</td>
            <td>{{ $appointment->doctor?->name ?? 'N/A' }}</td>
            <td>{{ $appointment->appointment_date?->format('M d, Y') }}</td>
            <td>{{ $appointment->status }}</td>
        </tr>
        @empty
        <tr><td colspan="4" class="text-center text-muted">No appointments yet.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
