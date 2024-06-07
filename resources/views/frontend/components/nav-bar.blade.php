
<nav class="navbar navbar-expand-md px-0 pt-0 main-nav">
    <div class="container bg-white">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse px-4 px-md-0 bg-white" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" title="home page" href="{{ route('home')}}"><img
                            width="25px" src=" {{asset('frontend/img/home-button.png')}}"
                            class="mr-2"></span></a>
                </li>

                <li class="nav-item style-orange dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        title="সাবমেনুর জন্য ক্লিক করুন">
                        কর অঞ্চল-১৮, ঢাকা সম্পর্কে
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="dropdown-menu-colums">
                            <div class="drop-column">
                                <h6 class="drop-col-heading">অফিস সম্পর্কিত</h6>

                                <a class="dropdown-item" href="https://www.taxeszone18dhaka.gov.bd/home/vision">ভিশন
                                    ও মিশন</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/At_a_glance">কর অঞ্চল-১৮, ঢাকা
                                    সম্পর্কিত তথ্যাদি</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/organizational_structure">সাংগঠনিক
                                    কাঠামো</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Citizen_Charter">সিটিজেন
                                    চার্টার</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/jurisdiction">কর অঞ্চল-১৮, ঢাকা
                                    এর অধিক্ষেত্র</a>
                            </div>
                            <div class="drop-column">
                                <h6 class="drop-col-heading">জনবল</h6>

                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Message_from_ct">কর কমিশনারের
                                    বার্তা</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/officers">কর্মকর্তাবৃন্দ</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item style-green dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        title="সাবমেনুর জন্য ক্লিক করুন">
                        ই-সেবা
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="dropdown-menu-colums">
                            <div class="drop-column" style="flex-basis: 100%;">
                                <a class="dropdown-item" href="http://www.nbrepayment.gov.bd/"
                                    title="ই-পেমেন্ট">ই-পেমেন্ট</a>
                                <a class="dropdown-item" href="http://103.48.16.132/echalan/"
                                    title="চালান ভেরিফাই">চালান ভেরিফাই</a>
                                <a class="dropdown-item" href="http://www.nbrtaxcalculator.org/"
                                    title="ট্যাক্স ক্যালকুলেটর">ট্যাক্স ক্যালকুলেটর</a>
                                <a class="dropdown-item" href="http://www.incometax.gov.bd/"
                                    title="ই-টিআইএন">ই-টিআইএন</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item style-blue dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        title="সাবমেনুর জন্য ক্লিক করুন">
                        ডাউনলোড
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="dropdown-menu-colums">
                            <div class="drop-column" style="flex-basis: 100%;">
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Return_Forms"
                                    title="রিটার্ন ফরমস">রিটার্ন ফরমস</a>
                                <a class="dropdown-item" href="https://www.taxeszone18dhaka.gov.bd/home/Apa"
                                    title="বার্ষিক কর্মসম্পাদন চুক্তি">বার্ষিক কর্মসম্পাদন চুক্তি</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Income_Tax_Guidelines"
                                    title="আয়কর নির্দেশিকা">আয়কর নির্দেশিকা</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Income_Tax_Circular"
                                    title="পরিপত্র">পরিপত্র</a>
                                <a class="dropdown-item"
                                    href="https://www.taxeszone18dhaka.gov.bd/home/Integrity_Strategy"
                                    title="জাতীয় শুদ্ধাচার কৌশল">জাতীয় শুদ্ধাচার কৌশল</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item style-cyan">
                    <a class="nav-link" href="https://www.taxeszone18dhaka.gov.bd/home/Photo_Gallery"
                        title="ফটো গ্যালারী">ফটো গ্যালারী</a>
                </li>

                <li class="nav-item style-purple">
                    <a class="nav-link" href="https://www.taxeszone18dhaka.gov.bd/home/Contact_Us"
                        title="যোগাযোগ">যোগাযোগ</a>
                </li>
                <li class="nav-item style-cyan">
                    <a class="nav-link" href="https://www.taxeszone18dhaka.gov.bd/home/feedback"
                        title="মতামত">মতামত</a>
                </li>
            </ul>
        </div>
    </div>
</nav>