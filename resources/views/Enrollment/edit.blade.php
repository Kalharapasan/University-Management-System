@extends('layout')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Update Enroll Details</h3>

        <div class="form-area">
            <form method="POST" action="{{ url('enrollment/'.$enrollment->id) }}">
                {!! csrf_field() !!}
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <label>Enroll On</label>
                        <input class="form-control" name="enroll_on" value="{{ $enrollment->enroll_on }}">
                    </div>
                    <div class="col-md-6">
                        <label>Batch ID</label>
                        <input class="form-control" name="batch_id" value="{{ $enrollment->batch_id }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label>Student ID</label>
                        <input class="form-control" name="student_id" value="{{ $enrollment->student_id }}">
                    </div>
                    <div class="col-md-6">
                        <label>Join Date</label>
                        <input type="date" class="form-control" name="join_date" value="{{ $enrollment->join_date }}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Fee</label>
                        <input class="form-control" name="fee" value="{{ $enrollment->fee }}">
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
