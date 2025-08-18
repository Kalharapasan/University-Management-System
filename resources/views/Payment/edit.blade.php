@extends('layout')

@section('content')

<div class="container">

    <h3 align="center" class="mt-5">Update Payment Details</h3>

    <div class="form-area">
        <form method="POST" action="{{ url('payment/'. $payment->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                        <label class="form-label">Enrollment No</label>
                        <select class="form-control" name="enrollment_id" required>
                        <option value="">Select Enrollment No</option>
                        @foreach($enrollments as $id => $enroll_on)
                            <option value="{{ $id }}" {{ $payment->enrollment_id == $id ? 'selected' : '' }}>{{ $enroll_on }}</option>
                        @endforeach
                    </select>
                    </div>
                <div class="col-md-6">
                    <label>Payment Date</label>
                    <input type="date" class="form-control" name="payment_date" value="{{ $payment->payment_date }}">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <label>Amount</label>
                    <input class="form-control" name="amount" value="{{ $payment->amount }}">
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
