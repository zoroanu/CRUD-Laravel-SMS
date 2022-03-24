@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laravel 8 STUDENT CRUD
                    <a href="{{ url('add-student') }}" class="btn btn-primary float-end">Add Student</a></h4>
                </div>
                <div class="card-body">
                        <table class="table brodered tabler-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Course</th>
                                    <th>Image</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($student as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->course }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/students/'.$item->profile_image) }}" width="40px" height="40px" alt="Image">
                                    </td>
                                    <td>
                                        <a href="{{ url('edit-student/'.$item->id) }}"  class="btn btn-primary btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('delete-student/'.$item->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection