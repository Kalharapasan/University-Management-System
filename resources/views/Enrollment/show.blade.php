@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Enrollment Details</h4>
                    <span class="badge bg-light text-primary">ID: {{ $enrollment->id }}</span>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Enroll On:</strong> {{ $enrollment->enroll_on }}</li>
                        <li class="list-group-item"><strong>Batch Name:</strong> {{ $enrollment->batch->name }}</li>
                        <li class="list-group-item"><strong>Student Name:</strong> {{ $enrollment->student->name }}</li>
                        <li class="list-group-item"><strong>Join Date:</strong> {{ $enrollment->join_date }}</li>
                        <li class="list-group-item"><strong>Fee:</strong> {{ $enrollment->fee }}</li>
                    </ul>
                    <a href="{{ url('enrollment') }}" class="btn btn-secondary mt-2">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
