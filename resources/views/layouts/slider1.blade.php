<div class="row mx-0" dir="rtl">
    <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
        @if($trendingPosts->isNotEmpty())
            <div class="fh5co_suceefh5co_height position-relative">
                <img src="{{ Storage::url($trendingPosts[0]->image) }}" alt="{{ $trendingPosts[0]->title }}" style="width:100%; height:600px !important;">
                <div class="fh5co_suceefh5co_height_position_absolute_font text-center">
                    <div>
{{--                        <a href="#" class="color_fff">--}}
{{--                            <i class="posts-title"></i>&nbsp;&nbsp;{{ $trendingPosts[0]->created_at->format('M d, Y') }}--}}
{{--                        </a>--}}
                    </div>
                    <div>
                        <a style="font-size:larger;"  href="{{ route('post.single', $trendingPosts[0]->slug) }}" class="posts-title">{{ $trendingPosts[0]->title }}</a>
                    </div>
                </div>
            </div>
        @else
            <p>لا توجد مقالات  متاحة.</p>
        @endif
    </div>

    <div class="col-md-6">
        <div class="row">
            @foreach($sliders as $post)
                <div class="col-md-6 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height_2 position-relative">
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width:100%; height:300px !important;">
                        <div class="fh5co_suceefh5co_height_position_absolute_font_2 text-center">

                            <div>
                                <a   href="{{ route('post.single', $post->slug) }}" class="posts-title">{{ $post->title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .fh5co_height_position_absolute_font,
    .fh5co_height_position_absolute_font_2 {
        position: absolute; /* لجعل النص يظهر فوق الصورة */
        top: 50%; /* لمحاذاة عمودياً */
        left: 50%; /* لمحاذاة أفقياً */
        transform: translate(-50%, -50%); /* لتحسين المحاذاة */
        font-size: 12px; /* حجم الخط */
        line-height: 1.5; /* تباعد الأسطر */
        text-align: center; /* محاذاة النص إلى الوسط */
        color: white; /* لون النص */
        padding: 5px; /* padding */
        background: rgba(0, 0, 0, 0.5); /* خلفية شفافة للنص */
    }
    .posts-title {
        color: white; /* اللون الأساسي للنص */
        text-decoration: none; /* لإزالة التسطير من الروابط */
        /*font-family: "Arial Black";*/
        font-size: larger;
        text-align: center;
        margin-top: 10px;

    }
    .posts-title:hover {
            color:  yellow; /* اللون عند التمرير فوق النص */


            @media (max-width: 768px) {
            .fh5co_height_position_absolute_font,
            .fh5co_height_position_absolute_font_2 {
                font-size: 10px; /* حجم خط أصغر */
                padding: 3px; /* تقليل padding */
            }
            .fh5co_suceefh5co_height {
                height: auto; /* السماح للصورة بالتكيف */
            }
        }

    }
    .fh5co_height_position_absolute_font,
    .fh5co_height_position_absolute_font_2 {
        position: absolute;
        top: 30%; /* اجعلها أعلى قليلًا */
        left: 50%;
        transform: translate(-50%, -50%);
        /* باقي الأنماط كما هي */
    }
    .paddding {
        padding: 0; /* إلغاء padding لتناسب أفضل */
    }

</style>
