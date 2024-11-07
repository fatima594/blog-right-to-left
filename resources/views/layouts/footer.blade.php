
<div class="container-fluid fh5co_footer_bg pb-3">
    <div class="container animate-box">
        <div class="row">
            <br>

            <br>
            <br>
            <br>
            <div class="clearfix"></div>
            <div class="col-12 col-md-4 col-lg-3">
                <br>
                <br>

                <div class="footer_main_title py-3"> اعرف اکثر عني</div>
                <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>
                <div class="footer_mediya_icon">
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                        </a></div>
                    <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                            <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                        </a></div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-4">
                <div class="footer_main_title py-3"> مقالات اخری</div>
                <ul class="footer_menu">
                    @foreach($posts->take(3) as $post)
                        @if($post->category && $post->category->slug === 'الاعشاب-العلاجیة')
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('post.single', $post->slug) }}">
                                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:50px; height:50px;">
                                    <!-- عرض الصورة بجانب العنوان -->
                                    {{ $post->title }}
                                </a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>

            <div class="col-12 col-md-12 col-lg-4 ">
                <div class="footer_main_title py-3"> آخر المقالات</div>
                @foreach($posts->take(6) as $post)
                <a href="{{ route('post.single', $post->slug) }}" class="footer_img_post_6"><img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px; height:50px;">
                </a>
                @endforeach

            </div>
        </div>
        <div class="row justify-content-center pt-2 pb-4">
            <div class="col-12 col-md-8 col-lg-7">
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control fh5co_footer_text_box" placeholder="ادخل الإيميل..." name="email" aria-describedby="basic-addon1" required>
                        <button type="submit" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12">
                            <i class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe
                        </button>
                    </div>
                </form>
            </div>
        </div>

{{--        @if(session('success'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session('success') }}--}}
{{--            </div>--}}
{{--        @endif--}}

{{--        @if ($errors->any())--}}
{{--            <div class="alert alert-danger">--}}
{{--                <ul>--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li>{{ $error }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        @endif--}}

</div>
</div>
<div class="container-fluid fh5co_footer_right_reserved">  </div>
    <div class="container">
        <div class="row  ">
            <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2024, All rights reserved. Design by <a href="https://freehtml53.co" title="Free HTML5 Bootstrap templates">Fatima Lakhal</a>. </div>

    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>

</body>
</html>


