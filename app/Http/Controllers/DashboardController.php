<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;


class DashboardController extends Controller
{
    public function index() {
        $patientCount = Patient::count();
        $doctorCount = Doctor::count();
        $appointmentCount = Appointment::count();
        $recentAppointments = Appointment::with(['patient', 'doctor'])
            ->latest('appointment_date')
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'patientCount',
            'doctorCount',
            'appointmentCount',
            'recentAppointments'
        )); 
    }
}
