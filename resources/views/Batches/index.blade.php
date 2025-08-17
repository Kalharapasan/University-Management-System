@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Batch List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('batch/create') }}" class="btn btn-success" title="Add Batch">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Batch
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Course</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($batches as $batch)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $batch->name }}</td>
                            <td>{{ $batch->course->name ?? $batch->course_id ?? 'N/A' }}</td>
                            <td>{{ $batch->start_date }}</td>
                            <td>
                                <a href="{{ url('batch/'.$batch->id) }}" title="View Batch">
                                    <button class="btn btn-info" style="display:inline">
                                        <i class="fas fa-eye" aria-hidden="true"></i> View
                                    </button>
                                </a>
                                <a href="{{ url('batch/'.$batch->id.'/edit') }}" title="Edit Batch">
                                    <button class="btn btn-primary" style="display:inline">
                                        <i class="fas fa-edit" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                <form action="{{ url('batch/'.$batch->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete Batch" onclick="return confirm('Are you sure?')">
                                        <i class="fas fa-trash" aria-hidden="true"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No batches found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('css')
@endpush
