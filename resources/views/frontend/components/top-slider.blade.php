<div class="container">
    <div style="height:auto;border-top:3px solid #FF0000;" class="main-banner">
        <div class="glide">
            <div data-glide-el="track" class="glide__track">
                <div class="glide__slides">



                    <div class="glide__slide">
                        <div class="home-banner">
                            <img src="{{ asset('frontend/img/slide-1.jpg') }}"
                                alt="Banner-01">
                        </div>
                    </div>



                    <div class="glide__slide">
                        <div class="home-banner">
                            <img src="{{ asset('frontend/img/slide-2.jpg') }}"
                                alt="Banner-03">
                        </div>
                    </div>



                    <div class="glide__slide">
                        <div class="home-banner">
                            <img src="{{ asset('frontend/img/slide-4.jpg') }}"
                                alt="Banner-04">
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="main-banner-content">
            <div class="logo mb-4">
                <img alt="logo" src="{{ asset('frontend/img/logo.png') }}">
            </div>
            <div class="ml-md-4">
                <h1 class="title" title="কর কমিশনারের কার্যালয়">কর কমিশনারের কার্যালয়</h1>
                <p class="para">
                    কর অঞ্চল-কুমল্লিা </p>
            </div>
        </div>
    </div>
    <div style="background-color: #2e9844; margin-bottom: 5px;" class="container">
        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"
            scrollamount="3"direction="left">
            
            @php
                $latestNotices = \App\Models\Notice::orderBy('id', 'desc')->take(5)->get();
            @endphp

            @foreach ($latestNotices as $notice)
            <img width="16px" src="{{asset('frontend/img/hand.png')}}" class="mr-2">
            <a style="font-size: 16px;color: #ffffff;"
            href="{{ route('notice.preview', $notice->id) }}" target="_blank"> {{ $notice->title }}</a>
            @endforeach
          

        </marquee>

        
    </div>
</div>