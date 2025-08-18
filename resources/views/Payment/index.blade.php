@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Payment List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('payment/create') }}" class="btn btn-success" title="Add Payment">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Payment
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Enrollment No</th>
                        <th scope="col">Payment Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($payments as $payment)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $payment->enrollment->enroll_on }}</td>
                            <td>{{ $payment->payment_date }}</td>
                            <td>{{ $payment->amount }}</td>
                            <td>
                                <a href="{{ url('payment', $payment->id) }}" title="View Payment">
                                    <button class="btn btn-info" style="display:inline">
                                        <i class="fas fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('payment/'. $payment->id. '/edit') }}" title="Edit Payment">
                                    <button class="btn btn-primary" style="display:inline">
                                        <i class="fas fa-edit" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form action="{{ url('payment', $payment->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete Payment" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No payments found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('css')
@endpush
