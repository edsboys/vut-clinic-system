@extends('layouts.app')

@section('content')
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-semibold mb-4">Book an Appointment</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="appointment_date" class="block font-medium">Appointment Date & Time</label>
                <input type="datetime-local" name="appointment_date" id="appointment_date" required class="w-full border rounded px-3 py-2 mt-1">
            </div>

            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                Book Now
            </button>
        </form>
    </div>
@endsection
