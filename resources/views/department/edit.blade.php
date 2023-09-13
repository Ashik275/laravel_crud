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
                        <div class="card-header">Dept Create Form</div>
                        <div class="card-body">
                            <form action="{{ route('departments.update',$department->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{$department->id}}" name="id">
                                <div class="mb-3">
                                    <label class="form-label">Department Name</label>
                                    <input type="text" name="dept_name" value="{{$department->dept_name}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Department Code</label>
                                    <input type="text" name="dept_code" value="{{$department->dept_code}}" class="form-control">
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
