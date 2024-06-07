@extends('frontend.layouts.app')

@section('content')

<div class="row">
    <div class="col-md-9">

  

        <!-- Notice board -->
      @include('frontend.components.notice-board')
        <!-- Notice board end -->

        {{-- <div class="row home-card-area">
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>কর অঞ্চল-১৮, ঢাকা বিষয়ে</h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/34d3ac53764cd999ce7413ad1075b9b5.png"
                                alt="আমাদের বিষয়ে">
                        </div>
                        <ul class="list-unstyled">
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://www.taxeszone18dhaka.gov.bd/home/vision"
                                    title="ভিশন ও মিশন ">ভিশন ও মিশন</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/At_a_glance"
                                    title="কর কর অঞ্চল-১৮, ঢাকা সম্পর্কিত তথ্যাদি ">কর অঞ্চল-১৮, ঢাকা সম্পর্কিত
                                    তথ্যাদি</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/organizational_structure"
                                    title="সাংগঠনিক কাঠামো ">সাংগঠনিক কাঠামো</a></li>

                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/jurisdiction"
                                    title="সিটিজেন চার্টার ">কর অঞ্চল-১৮, ঢাকা এর অধিক্ষেত্র</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://www.taxeszone18dhaka.gov.bd/home/officers"
                                    title="কর্মকর্তাবৃন্দ ">কর্মকর্তাবৃন্দ</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Contact_Us"
                                    title="যোগাযোগ ">যোগাযোগ </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>সেবাসমূহ</h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/aa34018bd6028ef359b85726953d76dc.png"
                                alt="সেবাসমূহ">
                        </div>
                        <ul class="list-unstyled">
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Citizen_Charter"
                                    title="সিটিজেন চার্টার ">সিটিজেন চার্টার</a></li>

                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Return_Forms"
                                    title="ফর্মস">আয়কর রিটার্ন ফর্মস</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="https://www.taxeszone18dhaka.gov.bd/home/IncomeTaxPaymentCode"
                                    title="আয়কর পরিশোধের কোড">আয়কর পরিশোধের কোড</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a target="_blank"
                                    href="https://bangladesh.gov.bd/site/view/policy"
                                    title="বিধিমালা">বিধিমালা</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>বার্ষিক কর্মসম্পাদন চুক্তি</h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/apa.png" alt="আইন ও বিধি">
                        </div>
                        <ul class="list-unstyled" style="margin:0">


                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>বিভিন্ন বাতায়ন</h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/b8f1acaa2b33624a089365352a0eed2d.png"
                                alt="বিভিন্ন বাতায়ন">
                        </div>
                        <ul class="list-unstyled">
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://ird.gov.bd/"
                                    title="অভ্যন্তরীণ সম্পদ বিভাগ">অভ্যন্তরীণ সম্পদ বিভাগ</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="http://nbr.gov.bd/"
                                    title="জাতীয় রাজস্ব বোর্ড">জাতীয় রাজস্ব বোর্ড, বাংলাদেশ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>জরুরী কল </h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/217662f3218280748d3153382b1e8a61.png"
                                alt="জরূরি কল ">
                        </div>
                        <ul class="list-unstyled">
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="http://bangladesh.gov.bd/site/page/79d371f2-4530-437a-982f-16c7c0a2ecad/"
                                    title="৩৩৩ থেকে তথ্য-সেবা">৩৩৩ থেকে তথ্য-সেবা</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="http://www.bangladesh.gov.bd/site/view/mservices/%E0%A6%95%E0%A6%B2%20%E0%A6%B8%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%B0/"
                                    title="কল সেন্টারসমূহ  ">কল সেন্টারসমূহ </a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a
                                    href="http://www.bangladesh.gov.bd/site/view/mservices/%E0%A6%B9%E0%A7%87%E0%A6%B2%E0%A7%8D%E0%A6%AA%E0%A6%A1%E0%A7%87%E0%A6%B8%E0%A7%8D%E0%A6%95/"
                                    title="হেল্পডেস্ক    ">হেল্পডেস্ক </a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="service-box">
                    <h4>ই-সার্ভিস</h4>
                    <div class="d-flex">
                        <div>
                            <img class="service-box-image"
                                src="https://www.taxeszone18dhaka.gov.bd/img/a2f30e6f81fb9b44e9ac99d70ed6d64f.png"
                                alt="ই-সার্ভিস">
                        </div>
                        <ul class="list-unstyled" style="margin:0;font-family: verdana;font-size: 12px;">
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://etds.gov.bd/login"
                                    title="eTDS Environment" target="_blank">eTDS Environment</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://etaxnbr.gov.bd/"
                                    title="e-TIN Registration" target="_blank">e-TIN Registration</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://office.etaxnbr.gov.bd/#/auth/sign-in"
                                    title="Office Management" target="_blank">Office Management</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://etaxnbr.gov.bd/#/submission-verification"
                                    title="Return verification" target="_blank"> Return Verification/PSR</a>
                            </li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://ibas.finance.gov.bd/acs/account/login"
                                    title="a-Chalan" target="_blank">a-Chalan</a></li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="https://nbr.sblesheba.com/IncomeTax/Payment"
                                    title="Sonali Bank e-Payment" target="_blank">Sonali Bank e-Payment</a>
                            </li>
                            <li class="mt-2"><img
                                    src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                                    class="mr-2"><a href="http://103.48.16.132/echalan/echalan_iframe.php"
                                    title="Chalan Verification" target="_blank">Chalan Verification</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mb-12">
                <div class="service-box">

                    <div class="d-flex">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.2704869948634!2d90.40718295102644!3d23.73568760354695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f383bd9b3f%3A0x5c1912db342fab90!2sOffice%20of%20the%20Commissioner%2C%20Dhaka%20Division%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1709126190209!5m2!1sen!2sbd"
                            width="600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div> --}}

    </div>
    <!-- Main content end-->

    <!-- Sidebar -->
    <div class="col-md-3">
        <div class="sidebar">



            <div class="block pers">
                <h5 class="title">মাননীয় অর্থমন্ত্রী</h5>

                <img class="pers-img" alt="মাননীয় অর্থমন্ত্রী"
                    src="https://www.taxeszone18dhaka.gov.bd/officers/fm.jpg">
                <p class="pers-description">
                    <strong>আবুল হাসান মাহমুদ আলী, এমপি<br>
                        মাননীয় অর্থমন্ত্রী<br>
                        অর্থ মন্ত্রণালয়</strong>
                </p>
            </div>

            <div class="block pers">
                <h5 class="title">চেয়ারম্যান</h5>
                <img class="pers-img" alt="চেয়ারম্যান"
                    src="https://www.taxeszone18dhaka.gov.bd/officers/Sr_Secretary_Sir_Abu_Hena_Md_Rahmatul_Muneem.jpg">
                <p class="pers-description"><strong>আবু হেনা মোঃ রহমাতুল মুনিম, সিনিয়র সচিব<br>

                        অভ্যন্তরীণ সম্পদ বিভাগ, অর্থ মন্ত্রণালয়<br>
                        এবং চেয়ারম্যান<br>
                        জাতীয় রাজস্ব বোর্ড</strong></p>
            </div>

            <div class="block pers">
                <h5 class="title">কর কমিশনার</h5>
                <img class="pers-img"
                    src="https://www.taxeszone18dhaka.gov.bd/officers/bb3b7019bc9490b6356e8a970901b0cc.jpg"
                    alt="কর কমিশনার">
                <p class="pers-description">
                    <strong>
                        জনাব কাজী লতিফুর রহমান<br>
                        কর কমিশনার<br>
                        কর অঞ্চল-১৮, ঢাকা </strong>
                </p>
            </div>
            <div class="block static_img_add">

            </div>

            <div class="block">
                <h5 class="title other_title">আভ্যন্তরীণ ই-সেবা</h5>
                <ul class="list-unstyled">
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"> <a class="link" href="http://www.nbrepayment.gov.bd/"
                            title="ই-পেমেন্ট">ই-পেমেন্ট</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="http://103.48.16.132/echalan/"
                            title="চালান ভেরিফাই">চালান ভেরিফাই</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="http://www.nbrtaxcalculator.org/"
                            title="ট্যাক্স ক্যালকুলেটর">ট্যাক্স ক্যালকুলেটর</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="http://www.incometax.gov.bd/"
                            title="ই-টিআইএন">ই-টিআইএন</a></li>
                </ul>
            </div>
            <div class="block">
                <h5 class="title other_title">গুরুর্তপূর্ন লিঙ্ক সমূহ</h5>
                <ul class="list-unstyled">
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="http://nbr.gov.bd/"
                            title="জাতীয় রাজস্ব বোর্ড">জাতীয় রাজস্ব বোর্ড</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="https://mof.gov.bd/"
                            title="অর্থ বিভাগ">অর্থ বিভাগ</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="https://mopa.gov.bd/"
                            title="জনপ্রশাসন মন্ত্রণালয়">জনপ্রশাসন মন্ত্রণালয়</a></li>
                    <li class="mt-2"><img src="https://www.taxeszone18dhaka.gov.bd/img/bullet_tick.png"
                            class="mr-2"><a class="link" href="https://ird.gov.bd/"
                            title="অভ্যন্তরীণ সম্পদ বিভাগ">অভ্যন্তরীণ সম্পদ বিভাগ</a></li>
                </ul>
            </div>



            <div class="block mb-4">
                <h5 class="title social_title">সামাজিক যোগাযোগ মাধ্যম</h5>
                <a class="link" title="" href="#" target="_blank" class="share-buttons">
                    <img class="img-fluid"
                        src="https://www.taxeszone18dhaka.gov.bd/img/facebook_full_text.jpeg" alt="">
                </a>
            </div>

            <div class="block">
                <h5 class="title">জরুরি হটলাইন</h5>
                <p><img alt="জরুরি হটলাইন" src="https://www.taxeszone18dhaka.gov.bd/img/National-Helpline.jpg"
                        class="img-fluid"></p>
            </div>

           
        </div>
    </div>
    <!-- Sidebar end -->
</div>

@endsection