@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Create Payment</h2>
    </div>

    <div class="card-body">
        <form action="{{ url('payment') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="enrollment_id" class="form-label">Enrollment No</label>
                <select class="form-control" id="enrollment_id" name="enrollment_id" required>
                    <option value="">Select Enrollment No</option>
                    @foreach($enrollments as $id => $enroll_on)
                        <option value="{{ $id }}">{{ $enroll_on }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="payment_date" class="form-label">Payment Date</label>
                <input type="date" class="form-control" id="payment_date" name="payment_date" required>
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" step="0.01" class="form-control" id="amount" name="amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Payment</button>
        </form>
    </div>

@endsection
