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
<div class="row mt-3">
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
