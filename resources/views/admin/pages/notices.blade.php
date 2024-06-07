@extends('admin.layouts.admin')

@section('title', 'Notices')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                

                <div class="table-responsive">

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($notices as $key => $notice)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td> {{$notice->title}}</td>
                                <td> {{$notice->description}}</td>
                                <td> {{ $notice->file_path }}</td>
                                <td>
                                    <a href=" " class="btn btn-primary btn-sm">View</a>
                                    <a href=" " class="btn btn-secondary btn-sm">Edit</a>
                                    <a href=" " class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                           
                           
                        </tbody>
                    </table>
                </div>
            </div>

        </div>


    </div>
    <!--- end row -->
@endsection
