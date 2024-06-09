<div class="notice-board">
    <div class="notice-board-bg">
        <h2>নোটিশ বোর্ড</h2>
        <div id="notice-board-ticker">
            <ul class="list-unstyled">

                @foreach ($notices as $notice)
                    <li class="mt-2">
                        <img width="20px" src="{{ asset('frontend/img/hand.jpg') }}" class="mr-2">
                        <a href="{{ route('notice.preview', $notice->id) }}" target="_blank"> {{ $notice->title }}</a>
                        <span class="float-right">{{ date('F j, Y', strtotime($notice->created_at)) }}</span>
                    </li>
                @endforeach


            </ul>
            <a href="#" title="সকল নোটিশ" class="reg_button">সকল নোটিশ</a>
        </div>

    </div>
</div>
