@extends('admin.layouts.admin')

@section('title', 'Notice')

@section('content')

    <div class="card w-50">
        <div class="card-body">
            <h4 class="header-title">{{ $notice->title }}</h4>
            <p class="sub-header">
                {{ $notice->description }}
            </p>



            {{-- show pdf or image --}}


            @if ($notice->file_path)

                @if (Str::contains($notice->file_path, '.pdf'))
                    <iframe src="{{ asset('storage/notices/'. $notice->file_path) }}" width="100%"></iframe>
                @else
                    <img src="{{ asset('storage/notices/'. $notice->file_path) }}" width="100%">
                @endif
            @endif

           

        </div>
    </div>


@endsection
