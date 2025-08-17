@extends('layout')

@section('content')

    <div class="card-header">
        <h2>Course List</h2>
    </div>

    <div class="card-body">
        <a href="{{ url('course/create') }}" class="btn btn-success" title="Add Course">
            <i class="fas fa-plus" aria-hidden="true"></i> Add Course
        </a>

        <br><br>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Syllabus</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($courses as $course)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->syllabus }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>
                                <a href="{{ url('course/'.$course->id) }}" title="View Course"><button class="btn btn-info" style="display:inline"><i class="fas fa-eye" aria-hidden="true"></i> View</button></a>
                                <a href="{{ url('course/'.$course->id.'/edit') }}" title="Edit Course"><button class="btn btn-primary" style="display:inline"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button></a>
                                <form action="{{ url('course/'.$course->id) }}" accept-charset="UTF-8" method="POST" style="display:inline">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger" title="Delete Course" onclick="return confirm('Are you sure?')"><i class="fas fa-trash" aria-hidden="true"></i> Delete</button>
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
