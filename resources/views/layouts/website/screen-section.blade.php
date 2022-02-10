<!--=====  Start App Screen Section  =====-->
<div id="app-screen" class="app-screen__container">
    <div class="container">
        <div class="app-screen__header">
            <h2>{{ $screen -> title }}</h2>
            <p>
                {{ $screen -> description }}
            </p>
        </div>
    </div>
    <div class="app-screen">
        <div class="container">
            <div class="owl-carousel" dir="ltr">
                <div><img src=" {{ URL::asset('website/assets/images/اعلان –بعد التسجيل كموصل.png') }} " alt=""></div>
                <div><img src=" {{ URL::asset('website/assets/images/الاعلانات.png') }} " alt=""></div>
                <div><img src=" {{ URL::asset('website/assets/images/2.png') }} " alt=""></div>
                <div><img src=" {{ URL::asset('website/assets/images/التصنيف.png') }} " alt=""></div>
                <div><img src=" {{ URL::asset('website/assets/images/- تسجيل الدخول3.png') }} " alt=""></div>
            </div>
            <div class="mobile__frame">
                <img src=" {{ URL::asset('website/assets/images/phone-frame2.png') }} " alt="">
            </div>
        </div>
    </div>
</div>
<!--=====  End App Screen Section  =====-->
