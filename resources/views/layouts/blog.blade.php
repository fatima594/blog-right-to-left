

{{--<div class="container-fluid pb-4 pt-4 paddding">--}}
{{--    <div class="container paddding">--}}
{{--        <div class="row mx-0">--}}
{{--            <div class="col-md-8 col-12 animate-box" data-animate-effect="fadeInLeft">--}}
{{--                <div>--}}

{{--                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">آخر المقالات</div>--}}
{{--                </div>--}}
{{--                @foreach($posts as $post)--}}
{{--                    <div class="row pb-4">--}}
{{--                        <div class="col-md-5">--}}
{{--                            <div class="fh5co_hover_news_img">--}}
{{--                                <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:300px; height:200px;">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-7 animate-box">--}}
{{--                            <a href="{{ route('post.single', $post->slug) }}" class="post-title">{{ $post->title }}</a>--}}
{{--                            <a href="#" class="fh5co_mini_time py-3"> Fatima Lakhal - {{ $post->created_at->format('F d, Y') }}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--            <div class="col-md-3 col-12 animate-box" data-animate-effect="fadeInRight">--}}
{{--                <div>--}}
{{--                    <div>--}}
{{--                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">الأقسام</div>--}}
{{--                        @if($posts->isNotEmpty())--}}
{{--                            @foreach($posts as $post)--}}
{{--                                <div class="fh5co_hover_news_img">--}}
{{--                                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px; height:50px;">--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <a class="post-title" href="{{ route('post.single', $post->slug) }}">{{ $post->title }}</a>--}}
{{--                                </div>--}}

{{--                            @endforeach--}}
{{--                        @else--}}
{{--                            <p>لا توجد مقالات في هذه الفئة.</p>--}}
{{--                        @endif--}}

{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="mt-4">--}}
{{--                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">مقالات الأكثر شعبية</div>--}}
{{--                    <div class="row pb-3">--}}
{{--                        <div class="col-5 align-self-center">--}}
{{--                            <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100px;height: 100px !important;">--}}
{{--                        </div>--}}
{{--                        <div class="col-7 paddding">--}}
{{--                            <a href="{{ route('post.single', $post->slug) }}" class="post-title"><span>{{ $post->title }}</span></a>--}}
{{--                            <div class="most_fh5co_treding_font_123">{{ $post->created_at->format('F d, Y') }}</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</div>--}}




{{--<style>--}}
{{--    .post-title {--}}
{{--        color: #093962; /* اللون الأساسي للنص */--}}
{{--        text-decoration: none; /* لإزالة التسطير من الروابط */--}}
{{--    }--}}

{{--    .post-title:hover {--}}
{{--        color:  #f5bc04; /* اللون عند التمرير فوق النص */--}}
{{--    }--}}
{{--</style>--}}

