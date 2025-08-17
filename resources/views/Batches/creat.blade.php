@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Create Batch</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('batch') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Batch Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Course ID</label>
                <input type="text" class="form-control" id="course_id" name="course_id" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Batch</button>
        </form>
    </div>

@endsection
