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
                                <th>File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($notices as $key => $notice)
                            <tr>
                                <th scope="row">{{++$key}}</th>
                                <td> {{$notice->title}}</td>
                                <td> {{$notice->description}}</td>
                                <td> 
                                    @if ($notice->file_path)
                                        @if (Str::contains($notice->file_path, '.pdf'))
                                            {{-- <iframe src="{{ asset('storage/notices/'. $notice->file_path) }}" width="80px" height="80px"></iframe> --}}

                                            PDF File
                                        @else
                                            <img src="{{ asset('storage/notices/'. $notice->file_path) }}" width="80px" height="80px" alt="{{$notice->title}}">
                                        @endif
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('notices.show', $notice->id)}}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('notices.edit', $notice->id)}}" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="{{ route('notices.destroy', $notice->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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
