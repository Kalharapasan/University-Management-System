@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Create Course</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('course') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="syllabus" class="form-label">Syllabus</label>
                <textarea class="form-control" id="syllabus" name="syllabus" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" class="form-control" id="duration" name="duration" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Course</button>
        </form>
    </div>

@endsection
