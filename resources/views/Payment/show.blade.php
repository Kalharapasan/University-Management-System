@extends('layout')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Payment Details</h4>
                    <span class="badge bg-light text-primary">ID: {{ $payment->id }}</span>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush mb-3">
                        <li class="list-group-item"><strong>Enrollment No:</strong> {{ $payment->enrollment->enroll_on }}</li>
                        <li class="list-group-item"><strong>Payment Date:</strong> {{ $payment->payment_date }}</li>
                        <li class="list-group-item"><strong>Amount:</strong> {{ $payment->amount }}</li>
                    </ul>
                    <a href="{{ url('payment') }}" class="btn btn-secondary mt-2">
                        <i class="fas fa-arrow-left"></i> Back to List
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
