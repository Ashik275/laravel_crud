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
                                    <th>Code</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>                   
                                        <td>{{ $department->dept_name }}</td>
                                        <td>{{ $department->dept_code }}</td>
                                        <td>{{ $department->status == 1 ? 'Active' : 'Deactive' }}</td>
                                        <td>
                                            <a href="{{ route('departments.edit', $department->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            @if ($department->status == 1)
                                                <a href="{{ route('departments.show', $department->id) }}"
                                                    class="btn btn-warning btn-sm">Inactive</a>
                                            @else
                                                <a href="{{route('departments.show', $department->id) }}"
                                                    class="btn btn-success btn-sm">Active</a>
                                            @endif


                                            <form action="{{ route('departments.destroy', $department->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" value="{{ $department->id }}" name="id">
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you want to delete this!!')">Delete
                                                </button>
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
