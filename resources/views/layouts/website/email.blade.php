<!--=====  Start Email Section  =====-->
<div class="email__container">
    <div class="container">
        <div class="email__content">
            <p>اشترك في القائمة البريدية ليصلك جديدنا</p>
            @include('message')
            <form action="{{ route('service.store') }}" method="POST">
                @method('POST')
                @csrf
                <input class="email__inp" type="text" placeholder="بريدك الإلكترونى" name="email">
                <input class="btn__submit" type="submit" value="إشتراك">
            </form>
        </div>
    </div>
</div>
<!--=====  End Email Section  =====-->
