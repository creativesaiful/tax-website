<!DOCTYPE html>
<html lang="en">

<head>

    <title>কর কমিশনারের কার্যালয়, কর অঞ্চল-১৮, ঢাকা</title>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">

    <!-- Basic Page Needs================================================== -->

    <meta name="keywords" content="">

    <meta name="description" content="">

    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="{{ asset('frontend/img/logo.png') }}" type="image/x-icon">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

</head>

<body>
   
    @include('frontend.components.top-slider')


    @include('frontend.components.nav-bar')


    <!-- Main container START -->
    <div class="container">

        @yield('content')
       
    </div>
    <!-- Main container END -->


    <footer class="mt-5">
        <div class="footer-artwork">
        </div>
        <div class="container">
            <div class="d-flex credit">
                <p>উন্নয়ন এবং বাস্তবায়নঃ</p>
                &nbsp;কর কমিশনারের কার্যালয় কর অঞ্চল-১৮, ঢাকা।
                 
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="{{asset('frontend/js/app.js')}}"></script>

</body>

</html>
