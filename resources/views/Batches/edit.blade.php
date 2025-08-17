@extends('layout')
@section('content')

<div class="container">
    <div class="card mt-5 shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0 text-center">Update Batch Details</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('batch/'.$batch->id) }}" method="POST">
                {!! csrf_field() !!}
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Batch Name</label>
                        <input class="form-control" name="name" value="{{ $batch->name ?? '' }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Course ID</label>
                        <select class="form-control" name="course_id" required>
                            <option value="">Select Course</option>
                            @foreach($courses as $id => $name)
                                <option value="{{ $id }}" {{ $batch->course_id == $id ? 'selected' : '' }}>{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Start Date</label>
                        <input type="date" class="form-control" name="start_date" value="{{ $batch->start_date ?? '' }}" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-end">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ url('batch') }}" class="btn btn-secondary ms-2">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

