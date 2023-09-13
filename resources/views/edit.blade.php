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
                            <form action="{{ route('update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$student->id}}" name="id">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Department Name</label>
                                    <select class="form-control" name="department_id"  id="department_id">
                                        <option value="">Please Select a Department</option>
                                        @foreach ($departments as $department)
                                            <option {{($department->id==$student->department_id) ? "selected":''}} value="{{ $department->id }}">{{ $department->dept_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Session</label>
                                    <select class="form-control" name="session_id" id="session_id">
                                        <option value="">Please Select a Session</option>
                                        @foreach ($sessions as $session)
                                            <option value="{{ $session->id }}" {{($session->id==$student->session_id) ? "selected":''}} >{{ $session->session_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" value="{{$student->email}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" value="{{$student->phone}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="address">{{$student->address}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                   <input type="file" name="image" class="form-control">
                                    <img src="{{asset($student->image)}}" style="height: 50px; width: 50px" alt=""></td>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
