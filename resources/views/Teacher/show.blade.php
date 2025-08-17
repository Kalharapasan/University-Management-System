@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Teacher Details</h4>
                    <span class="badge bg-light text-primary">ID: {{ $Teacher->id }}</span>
                </div>
                <div class="card-body">
                    <div class="mb-3 text-center">
                        <i class="fas fa-chalkboard-teacher fa-4x mb-3 text-primary"></i>
                        <h3 class="card-title">{{ $Teacher->name }}</h3>
                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Birthday:</strong> {{ $Teacher->dob }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $Teacher->email }}</li>
                        <li class="list-group-item"><strong>Address:</strong> {{ $Teacher->address }}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{ $Teacher->phone }}</li>
                    </ul>
                    <a href="{{ url('teacher') }}" class="btn btn-secondary mt-2">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
