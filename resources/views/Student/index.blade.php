@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Student List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('student/creat') }}" class="btn btn-success" title="Add Student">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Student
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->status }}</td>
                            <td>
                                <a href="{{ url('student/'.$student->id) }}" title="View Student"><button class="btn btn-info" style="display:inline" a><i class="fas fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('student/'.$student->id.'/edit') }}" title="Edit Student"><button class="btn btn-primary" style="display:inline" ><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                                <form action="{{ url('student/'.$student->id) }}"  accept-charset="UTF-8" method="POST" style="display:inline">

                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" title="Delete Student" onclick="return confirm('Are you sure?')"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
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
