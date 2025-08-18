@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Update Course Details</h3>

        <div class="form-area">
            <form method="POST" action="{{ url('course/' . $course->id) }}">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <label>Course Name</label>
                        <input class="form-control" name="name" value="{{ $course->name }}">
                    </div>
                    <div class="col-md-6">
                        <label>Syllabus</label>
                        <input class="form-control" name="syllabus" value="{{ $course->syllabus }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Duration</label>
                        <input class="form-control" name="duration" value="{{ $course->duration }}">
                    </div>
                    <div class="col-md-6">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="Active" {{ $course->status == 'Active' ? 'selected' : '' }}>Active</option>
                            <option value="Inactive" {{ $course->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-3">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </div>

            </form>
        </div>

    </div>

@endsection

@push('css')
@endpush
