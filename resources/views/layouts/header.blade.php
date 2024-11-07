<!DOCTYPE html>
<html lang="ar" dir="rtl" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="استمتع بقراءة مقالات حول تحضير الحلويات، الشوربات، والمعجنات، بالإضافة إلى فوائد الأعشاب العلاجية. اكتشف وصفات سهلة ولذيذة لتحسين تجربتك في الطهي.">
    <title>موقع تحضير الحلويات والشوربات والمعجنات</title>

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link href="{{ asset('css/media_query.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style_1.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <style>
        .dropdown-menu {
            right: 0;
            left: auto;
        }
        .navbar-collapse {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
        }
        .dropdown-item {
            white-space: nowrap;
        }


        html, body {
            overflow-x: hidden; /* منع الحركة الأفقية */
        }

        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden; /* منع الحركة الأفقية */
        }

        nav {
            position: relative; /* التأكد من أن شريط التنقل لا يتحرك */
        }

        /* تنسيق شريط التنقل للشاشات الكبيرة */
        @media (min-width: 992px) {
            nav {
                display: flex; /* تأكد من أنه يعمل على الشاشات الكبيرة */
            }

            .navbar-nav {
                display: flex; /* استخدام الفلکس لعرض العناصر بشكل متناسق */
                align-items: center; /* محاذاة العناصر عموديًا */
            }

            .dropdown-menu {
                right: 0;
                left: auto; /* تأكد من أن القوائم المنسدلة تظهر بشكل صحيح */
            }

            .navbar-collapse {
                position: relative; /* استخدام الموضع النسبي بدلاً من المطلق */
                display: flex; /* التأكد من عرض القوائم */
                justify-content: flex-end; /* محاذاة العناصر إلى اليمين */
            }

            .dropdown-item {
                white-space: nowrap; /* منع التفاف النص */
            }
        }

        /* تنسيق شريط التنقل للشاشات الصغيرة */
        @media (max-width: 991px) {
            .navbar-collapse {
                display: none; /* إخفاء القوائم المنسدلة افتراضيًا */
            }

            .navbar-toggler {
                display: block; /* إظهار زر التنقل */
            }

            .navbar-collapse.show {
                display: flex; /* إظهار القوائم المنسدلة عند الضغط على الزر */
                flex-direction: column; /* ترتيب العناصر عموديًا */
            }
        }


        .social-icons a {
            color: #000;                /* لون الأيقونات */
            margin: 0 10px;            /* تباعد بين الأيقونات */
            font-size: 24px;           /* حجم الأيقونات */
            transition: color 0.3s;     /* إضافة تأثير انتقال عند تغيير اللون */
        }

        .social-icons a:hover {
            color: #007bff;            /* تغيير لون الأيقونات عند التمرير فوقها */
        }

        .navbar-toggler {
            border: 2px solid transparent; /* اجعل الحدود شفافة افتراضياً */
            transition: border-color 0.3s; /* إضافة تأثير انتقال لتغيير اللون */
        }

        .navbar-toggler:focus,
        .navbar-toggler:active {
            border-color: #f5bc04; /* تغيير لون الحدود إلى الأصفر عند الضغط */

        }



    </style>
</head>

<body>
<div style="background:#f5bc04;" class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"></a>
            </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
                <img src="{{ asset('images/logo7.png') }}" alt="شعار"  class="fh5co_logo_width" />
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light">

            <button class="navbar-toggler navbar-toggler-right mt-6" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>

            <a class="navbar-brand" href="{{url('/')}}">
                <img  src="{{ asset('images/logo7.png') }}" alt="شعار" class="mobile_logo_width"/>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{'/'}}">الرئیسیة <span class="sr-only">(الحالية)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            المقالات <span class="sr-only">(الحالية)</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            @foreach($posts->take(4) as $post)
                                <li>
                                    <a class="dropdown-item" href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a>
                                </li>
                            @endforeach
                        </ul>
{{--                    هذا لجلب الاقسام categories--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                            القسم الاول <span class="sr-only">(الحالية)</span>--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                            @foreach($categories as $category)--}}
{{--                                @if($category->slug === 'الاعشاب-العلاجیة' && $category->posts->count() > 0)--}}
{{--                                    <li>--}}
{{--                                        <a class="dropdown-item" href="{{ route('post.single', $post->slug) }}">{{ $category->name }}</a>--}}
{{--                                    </li>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </li>--}}

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            العلاجات العشبیة <span class="sr-only">(الحالية)</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            @foreach($posts as $post)
                                @if($post->category && $post->category->slug === 'الاعشاب-العلاجیة')
                                    <li class="d-flex align-items-center">
                                        <a class="dropdown-item d-flex align-items-center" href="{{ route('post.single', $post->slug) }}">
                                            <!-- عرض الصورة بجانب العنوان -->
                                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:50px; height:50px;">
                                            {{ $post->title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            تحضیر المعجنات <span class="sr-only">(الحالية)</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            @foreach($posts as $post)
                                @if($post->category && $post->category->slug === 'تحضیر-المعجنات') <!-- تحقق من وجود الفئة -->
                                <li>
                                    <a class="dropdown-item" href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact')}}">تواصل معنا <span class="sr-only">(الحالية)</span></a>
                    </li>


                    <li class="nav-item">
                        <a class="fa-solid fa-right-to-bracket" href="{{ route('register') }}" style="color: green;">
                            تسجیل الدخول<span class="sr-only">(الحالية)</span>
                        </a>
                    </li>

                </ul>
            </div>
{{--            <a class="navbar-brand" href="#">--}}
{{--                <img src="{{ asset('images/logo5.png') }}" alt="شعار" class="mobile_logo_width"/>--}}
{{--            </a>--}}
        </nav>
    </div>
</div>
</body>
</html>
