@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Batch Details</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3 text-center">
                        <i class="fas fa-layer-group fa-4x mb-3 text-success"></i>
                        <h3 class="card-title">{{ $batch->name }}</h3>
                    </div>
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item">
                            <strong>Course:</strong>
                            {{ isset($batch->course) ? $batch->course->name : ($batch->course_id ?? 'N/A') }}
                        </li>
                        <li class="list-group-item">
                            <strong>Start Date:</strong> {{ $batch->start_date }}
                        </li>
                    </ul>
                    <a href="{{ url('batch') }}" class="btn btn-secondary mt-2">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
