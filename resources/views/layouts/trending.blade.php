

<div class="container animate-box" data-animate-effect="fadeIn" style="text-align: center;">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"> مقالات رائجة</div>
    </div>
    <div class="owl-carousel owl-theme js" id="slider1">
        @foreach($trendings as $post)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img">
                        <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width: 200px; height: 300px !important;" class="fh5co_img_special_relative" />
                    </div>
{{--                    <div class="fh5co_suceefh5co_height_position_absolute"></div>--}}

                    <div  >
                        <a  href="{{ route('post.single', $post->slug) }}" class="post-title">{{ $post->title }}</a>
                        <div class="fh5co_latest_trading_date_and_name_color" style="font-size: 12px; line-height: 1.4; margin-top: 5px;">
                         - {{ $post->created_at->format('F d, Y') }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



<style>
    .fh5co_latest_trading_img_position_absolute_1 {
        text-align: left; /* محاذاة النصوص إلى اليسار */
    }
    .fh5co_latest_trading_date_and_name_color {
        color: black; /* لون النص */
    }
    /*.fh5co_img_special_relative {*/
    /*    display: block; !* لجعل الصورة تتصرف مثل العنصر الكتلي *!*/
    /*    max-width: 200%; !* لضمان عدم تجاوز عرض الصورة *!*/
    /*    height: 400px; !* للحفاظ على نسبة الطول إلى العرض *!*/
    /*    width: 300px;*/



    /*}*/
    .post-title {
        color: black; /* اللون الأساسي للنص */
        text-decoration: none; /* لإزالة التسطير من الروابط */
    }

    .post-title:hover {
        color:  #f5bc04; /* اللون عند التمرير فوق النص */
    }

    @media  {
        owl-carousel :owl-theme js;

    }




</style>
