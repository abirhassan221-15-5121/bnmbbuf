@extends('index') {{-- Or your layout --}}

@section('content')
<div class="container mt-5">

    {{-- WELCOME MESSAGE --}}
    <div class="mb-4">
        <h2>Hello, {{ auth()->user()->name ?? 'Guest' }} 👋</h2>
        <p class="text-muted">Here's what's happening with your application today.</p>
    </div>

    {{-- STAT CARDS --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">Total Users</h6>
                        <h3 class="mb-0">100</h3>
                    </div>
                    <i class="fas fa-users fa-2x text-primary"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">Bookings</h6>
                        <h3 class="mb-0">42</h3>
                    </div>
                    <i class="fas fa-calendar-check fa-2x text-success"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">Revenue</h6>
                        <h3 class="mb-0">$5,320</h3>
                    </div>
                    <i class="fas fa-dollar-sign fa-2x text-warning"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- RECENT BOOKINGS TABLE --}}
    <div class="card mt-5 shadow border-0">
        <div class="card-header bg-white">
            <h5 class="mb-0">Recent Bookings</h5>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Booking Name</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>2025-08-05</td>
                        <td><span class="badge bg-success">Confirmed</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>2025-08-04</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- LOGOUT BUTTON --}}
    <div class="text-end mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-outline-danger">Logout</button>
        </form>
    </div>
</div>
@endsection