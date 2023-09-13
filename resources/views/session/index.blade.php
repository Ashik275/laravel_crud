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
                        <div class="card-header">Session Create Form</div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>sl</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($sessions as $session)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $session->session_name }}</td>

                                        <td>
                                            <a href="{{ route('sessions.edit', $session->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('sessions.destroy', $session->id) }}" method="post">
                                                {{-- @csrf --}}
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $session->id }}" name="id">
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
