@extends('layouts.app')

@section('content')
    <h1>Welcome to the Admin Dashboard, {{ Auth::user()->name }}!</h1>
    <!-- Add more content here for the admin dashboard -->
@endsection
