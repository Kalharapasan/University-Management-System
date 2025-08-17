@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Update Student Details</h3>

            <div class="form-area">
                <form method="POST" action="{{ url('student/'.$student->id) }}">
                   {!! csrf_field() !!}
                   @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label>Student Name</label>
                            <input class="form-control" name="name" value="{{ $student->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Student DOB</label>
                            <input type="date" class="form-control" name="dob" value="{{ $student->dob }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Address</label>
                            <input class="form-control" name="address" value="{{ $student->address }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input class="form-control" name="phone" value="{{ $student->phone }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $student->email }}">
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <label>Status</label>
                            <select class="form-control" name="status">
                                <option value="Active" {{ $student->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="Inactive" {{ $student->status == 'Inactive' ? 'selected' : '' }}>Inactive</option>
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
