@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Update Teacher Details</h3>

            <div class="form-area">
                <form method="POST" action="{{ url('teacher/'.$teacher->id) }}">
                   {!! csrf_field() !!}
                   @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Teacher Name</label>
                            <input class="form-control" name="name" value="{{ $teacher->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Teacher DOB</label>
                            <input type="date" class="form-control" name="dob" value="{{ $teacher->dob }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input class="form-control" name="address" value="{{ $teacher->address }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input class="form-control" name="phone" value="{{ $teacher->phone }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $teacher->email }}">
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="Active" {{ $teacher->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $teacher->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
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
        </div>
    </div>

@endsection


@push('css')

@endpush
