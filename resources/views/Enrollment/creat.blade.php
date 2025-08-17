@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Create Enrollment</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('enrollment') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="enroll_on" class="form-label">Enroll On</label>
                <input type="text" class="form-control" id="enroll_on" name="enroll_on" required>
            </div>
            <div class="mb-3">
                <label for="batch_id" class="form-label">Batch ID</label>
                <input type="number" class="form-control" id="batch_id" name="batch_id" required>
            </div>
            <div class="mb-3">
                <label for="student_id" class="form-label">Student ID</label>
                <input type="number" class="form-control" id="student_id" name="student_id" required>
            </div>
            <div class="mb-3">
                <label for="join_date" class="form-label">Join Date</label>
                <input type="date" class="form-control" id="join_date" name="join_date" required>
            </div>
            <div class="mb-3">
                <label for="fee" class="form-label">Fee</label>
                <input type="number" class="form-control" id="fee" name="fee" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Enrollment</button>
        </form>
    </div>

@endsection
