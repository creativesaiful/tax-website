
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
                            class="mr-2"></a>
                </li>

                <li class="nav-item style-orange dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        title="সাবমেনুর জন্য ক্লিক করুন">
                        আমাদের সম্পর্কে
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <div class="dropdown-menu-colums">
                            <div class="drop-column">
                                <h6 class="drop-col-heading">অফিস সম্পর্কিত</h6>

                                <a class="dropdown-item" href="#">ভিশন
                                    ও মিশন</a>

                            </div>
                            <div class="drop-column">
                                <h6 class="drop-col-heading">জনবল</h6>

                                <a class="dropdown-item"
                                    href="#">কর্মকর্তাবৃন্দ</a>
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
                                <a class="dropdown-item" href="https://nbr.sblesheba.com/IncomeTax/Payment" title="ই-পেমেন্ট" target="_blank">ই-পেমেন্ট</a>
                                <a class="dropdown-item" href="http://103.48.16.132/echalan/"
                                    title="চালান ভেরিফাই" target="_blank">চালান ভেরিফাই</a>
                                <a class="dropdown-item" href="https://secure.incometax.gov.bd/Registration/Login?ReturnUrl=%2fPreview" title="ই-টিআইএন" target="_blank">ই-টিআইএন</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>