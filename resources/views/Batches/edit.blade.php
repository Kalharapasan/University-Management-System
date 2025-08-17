<form action="{{ route('batch/'. $batch->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <label>Batch Name</label>
            <input class="form-control" name="name" value="{{ $batch->name ?? '' }}" required>
        </div>
        <div class="col-md-6">
            <label>Course</label>
            <select class="form-control" name="course_id" required>
                <option value="">-- Select Course --</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ (isset($batch) && $batch->course_id == $course->id) ? 'selected' : '' }}>
                        {{ $course->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <label>Start Date</label>
            <input type="date" class="form-control" name="start_date" value="{{ $batch->start_date ?? '' }}" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Update Batch</button>
        </div>
    </div>
</form>
