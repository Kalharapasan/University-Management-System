@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Teacher List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('teacher/create') }}" class="btn btn-success" title="Add Teacher">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Teacher
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Teacher Name</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->dob }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->phone }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->status }}</td>
                            <td>
                                <a href="{{ url('teacher/'.$teacher->id) }}" title="View Teacher"><button class="btn btn-info" style="display:inline"><i class="fas fa-eye" aria-hidden="true"></i> View</button></a>
                              
                                <a href="{{ url('teacher/'.$teacher->id.'/edit') }}" title="Edit Teacher"><button class="btn btn-primary" style="display:inline"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>

                                <form action="{{ url('teacher/'.$teacher->id) }}" accept-charset="UTF-8" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" title="Delete Teacher" onclick="return confirm('Are you sure?')"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
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
