{{-- @extends('frontend.layouts.app')

@section('content') --}}
<div class="notice-board">
    <div class="notice-board-bg">
        <h2>নোটিশ</h2>
        <hr>
        <div id="notice-board-ticker">
           <h4>{{ $notice->title }}</h4>

           <p>{{ $notice->description }}</p>

       
        </div>

    </div>
</div>
{{-- @endsection --}}
