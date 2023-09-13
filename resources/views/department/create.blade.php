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
                        <div class="card-header">Department Create Form</div>
                        <div class="card-body">
                            <form action="{{ route('departments.store') }}" method="post">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Dept Name</label>
                                    <input type="text" name="dept_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dept Code</label>
                                    <input type="text" name="dept_code" class="form-control">
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

