@section('header')
    @include('layouts.header')
@show

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }} -  تحضير الحلويات والشوربات والمعجنات</title>
    <meta name="description" content="{{ Str::limit(strip_tags($post->body), 150) }} - اقرأ المزيد حول {{ $post->title }} وطرق تحضيره.">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="single" style="direction: rtl;">



<div id="fh5co-title-box" style="background-image: url(images/camila-cordeiro-114636.jpg); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div><div class="page-title">

        <img src="{{Storage::url($post->image)}}" alt="" style="width:500px;height: 400px !important;">
        <span>Fatima Lakhal -{{ $post->created_at->format('F d, Y') }}</span>

        {{--        <h4>{{$post->title}}</h4>--}}
    </div>
</div>


<hr>
<hr>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <h3>{{$post->title}}</h3>
{{--                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:500px;height: 400px !important;">--}}

                <p>{!! trim(html_entity_decode($post->body)) !!}</p>

            </div>

            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div>

                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> مقالات مرتبطة بالاعشاب العلاجیة</div>
                        @if($posts->isNotEmpty())
                            @foreach($posts as $post)
                                @if($post->category && $post->category->slug === 'الاعشاب-العلاجیة') <!-- تحقق من وجود الفئة -->
                                <div class="fh5co_hover_news_img">
                                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px; height:50px;">
                                </div>
                                <div>
                                    <a class="post-title" href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a>
                                </div>
                                @endif

                            @endforeach
                        @else
                            <p>لا توجد مقالات في هذه الفئة.</p>
                        @endif

                    </div>

                </div>
                <hr>
                <hr>
                <hr>
                <div>
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">مقالات مرتبطة بتحضیر العجائن </div>
                        @if($posts->isNotEmpty())
                            @foreach($posts as $post)
                            @if($post->category && $post->category->slug === 'تحضیر-المعجنات') <!-- تحقق من وجود الفئة -->
                                <div class="fh5co_hover_news_img">
                                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px; height:50px;">
                                </div>
                                <div>
                                    <a class="post-title" href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a>
                                </div>
                                @endif
                            @endforeach


                        @else
                            <p>لا توجد مقالات في هذه الفئة.</p>
                        @endif

                    </div>

                </div>

                <hr>
                <hr>
                <hr>

                <div class="mt-4">
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">مقالات الأكثر شعبية</div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px;height: 100px !important;">
                        </div>
                        <div class="col-7 paddding">
                            <a href="{{ route('post.single', $post->slug) }}" class="d-block fh5co_small_post_heading"><span>{{ $post->title }}</span></a>
                            <div class="most_fh5co_treding_font_123">{{ $post->created_at->format('F d, Y') }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container animate-box" data-animate-effect="fadeIn" style="text-align: right;">
    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">التعليقات</div>

    <!-- عرض التعليقات الموجودة -->
    @foreach($post->comments as $comment)
        <div class="comment mb-3">
            <strong>{{ $comment->name }}</strong>
            <p>{{ $comment->body }}</p>
            <small>{{ $comment->created_at->format('F d, Y') }}</small>
            <hr>
        </div>
    @endforeach

    <!-- نموذج إضافة تعليق -->
    <form action="{{ route('comments.store', $post->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">اسمك</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">تعليقك</label>
            <textarea name="body" id="body" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-warning">إضافة تعليق</button>
    </form>
</div>

<div class="container animate-box" data-animate-effect="fadeIn">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">مقالات رائجة</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach($relatedPosts->take(3) as $related)
            <div class="item px-2">
                <div class="fh5co_hover_news_img">
                    <img src="{{ Storage::url($related->image) }}" alt="{{ $related->title }}" style="width:100px;height: 50px !important;">
                    <div>
                        <a href="{{ route('post.single', $related->slug) }}" class="post-title"><span class="">{{$related->title}}</span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
















<div class="container-fluid fh5co_footer_bg pb-3">
    @section('footer')
        @include('layouts.footer')
    @show
</div>
<div class="container-fluid fh5co_footer_right_reserved">
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>
<script>if (!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)){$(window).stellar();}</script>

</body>
</html>
<style>
    .post-title {
        color: black; /* اللون الأساسي للنص */
        text-decoration: none; /* لإزالة التسطير من الروابط */
    }

    .post-title:hover {
        color:  #f5bc04; /* اللون عند التمرير فوق النص */
    }
</style>
