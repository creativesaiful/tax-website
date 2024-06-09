 @extends('frontend.layouts.app')

@section('content')
<div class="notice-board">
    <div class="notice-board-bg">
        <h2>নোটিশ</h2>
        <hr>
        <div id="notice-board-ticker">
           <h4>{{ $notice->title }}</h4>

           <p>{{ $notice->description }}</p>

           @if($notice->file_path)
            <a href="{{ asset('storage/notices/'. $notice->file_path) }}" target="_blank">ডাউনলোড ফাইল</a>
            @endif
                
        </div>

    </div>
</div>
 @endsection
