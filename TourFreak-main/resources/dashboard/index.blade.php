@extends('index') {{-- Or use your actual layout file if it's different --}}

@section('content')
<div class="container mt-5">
    <h1>Welcome, {{ auth()->user()->name ?? 'Guest' }}!</h1>

    <div class="mt-4">
        <p>This is your dashboard.</p>
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger mt-3">Logout</button>
        </form>
    </div>
</div>
@endsection
