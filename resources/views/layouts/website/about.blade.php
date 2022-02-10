<!--=====  Start About Section  =====-->
<div id="about" class="about__container">
    <div class="about__content container">
        <div class="row">
            <div class="about__content-img col-md-6 col-xs-12">
                <img src=" {{ URL::asset('website/assets/images/about.png') }} " alt="">
            </div>
            <div class="about__content-details col-md-6 col-xs-12">
                <div class="about__title">
                    <h1 class="heading">{{ $about -> title }}</h1>
                </div>
                <div class="about__text">
                    <p>
                        {{ $about -> description }}
                    </p>
                </div>
                <div class="btn__group btn__download">
                    <a href="#">
                        <img src=" {{ URL::asset('website/assets/images/GooglePlay.png') }} " alt="google Play">
                        <p>
                            <span class="down-now">حمل الان</span> Google Play
                        </p>
                    </a>
                    <a href="#">
                        <img src=" {{ URL::asset('website/assets/images/apple.png') }} " alt="apple">
                        <p>
                            <span class="down-now">حمل الان</span> App Store
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====  End About Section  =====-->
