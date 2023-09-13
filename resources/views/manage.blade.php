@extends('master')
@section('title')
    Create
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Student Create Form</div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Adderss</th>
                                    <th>Department</th>
                                    <th>Session</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($students as $students)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $students->name }}</td>
                                        <td>{{ $students->email }}</td>
                                        <td>{{ $students->phone }}</td>
                                        <td>{{ $students->address }}</td>
                                        <td>{{ $students->department->dept_name }}</td>
                                        <td>{{ $students->session->session_name }}</td>
                                        <td><img src="{{ asset($students->image) }}" style="height: 50px; width: 50px"
                                                alt=""></td>
                                        <td>
                                            <a href="{{ route('edit', ['id' => $students->id]) }}"
                                                class="btn btn-primary btn-sm">Edit</a>

                                            <form action="{{ route('delete') }}" method="post">
                                                @csrf
                                                <input type="hidden" value="{{ $students->id }}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you want to delete this!!')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
