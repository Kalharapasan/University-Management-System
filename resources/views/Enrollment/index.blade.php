@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Enrollment List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('enrollment/create') }}" class="btn btn-success" title="Add Enrollment">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Enrollment
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Enroll On</th>
                        <th scope="col">Batch Name</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Fee</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($enrollments as $enrollment)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $enrollment->enroll_on }}</td>
                            <td>{{ $enrollment->batch->name ?? '' }}</td>
                            <td>{{ $enrollment->student->name ?? '' }}</td>
                            <td>{{ $enrollment->join_date }}</td>
                            <td>{{ $enrollment->fee }}</td>
                            <td>
                                <a href="{{ url('enrollment/'.$enrollment->id) }}" title="View Enrollment"><button class="btn btn-info" style="display:inline"><i class="fas fa-eye" aria-hidden="true"></i> View</button></a>

                                <a href="{{ url('enrollment/'.$enrollment->id.'/edit') }}" title="Edit Enrollment"><button class="btn btn-primary" style="display:inline"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>

                                <form action="{{ url('enrollment/'.$enrollment->id) }}" accept-charset="UTF-8" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" title="Delete Enrollment" onclick="return confirm('Are you sure?')"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('css')
@endpush
