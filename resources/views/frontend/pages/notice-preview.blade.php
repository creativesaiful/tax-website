{{-- @extends('frontend.layouts.app')

@section('content') --}}
<div class="notice-board">
    <div class="notice-board-bg">
        <h2>নোটিশ</h2>
        <hr>
        <div id="notice-board-ticker">
           <h4>{{ $notice->title }}</h4>

           <p>{{ $notice->description }}</p>

           {{-- <iframe src="{{ asset('storage/notices/'. $notice->file_path) }} " frameborder="0" width="100%"></iframe> --}}

            <embed src="file:///C:/Users/Md.%20Saiful%20Islam/Desktop/Saiful.pdf" width="100%" type="">
              
                <iframe src="file:///C:/Users/Md.%20Saiful%20Islam/Desktop/Saiful.pdf" frameborder="0"></iframe>
           
        </div>

    </div>
</div>
{{-- @endsection --}}
