@extends('home.layout.master')

@section('content')
<div class="secondary-pages homepage-02">

    <!--- Preloader Start -->
    {{-- <div id="onyx-preloader">
        <div  class="preloader">
            <div class="spinner"></div>
            <div class="loader">
                <span data-text="O" class="letter-animation">O</span>
                <span data-text="N" class="letter-animation">N</span>
                <span data-text="Y" class="letter-animation">Y</span>
                <span data-text="X" class="letter-animation">X</span>
            </div>
        </div>
    </div> --}}
    <!-- Preloader End -->


    <!--  Home Start  -->
    <section id="home" class="blog-page-header py-6">
        <div class="home-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="header-title">بهترین راه برای تبدیل شدن به یک طراح وب خوب</h2>
                        <div class="entry-meta">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="lni lni-calendar"></i>
                                        22 آذر 1401
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="lni lni-user"></i>
                                        مدیر
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="lni lni-comments-alt"></i>
                                        24 نظر
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Home End  -->


   <!--  blog Single Start  -->
    <section class="blog-single py-6">
        <div class="container">
            <div class="row row-sticky">
                <div class="col-lg-8 post-content">
                    <div class="single-post">
                        <div class="entry-image">
                            <img src="{{url(env('COURSE_IMAGE_PATH') . $course->image)}}" alt="">
                        </div>
                        <div class="entry-content">
                            <p class="mb-0">این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. این یک کپی ساختگی است قرار نیست خوانده شود. این فقط برای نشان دادن ظاهر و احساس متن تمام شده و تایپ شده در اینجا قرار داده شده است. این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. فقط برای نمایش</p>
                            <div class="quotation">
                                <h6 class="font-italic mb-0">"ما بونا را دوست داریم، در یک زمینه حرفه‌ای اغلب اتفاق می‌افتد که مشتریان خصوصی یا شرکتی دستور انتشار یک نشریه را می‌دهند. در یک زمینه حرفه‌ای، اغلب اتفاق می‌افتد که مشتریان خصوصی یا شرکتی سفارش انتشار یک نشریه را می‌دهند."</h6>
                            </div>
                            <h3>مدیریت بهتر اشتباهات تیم</h3>
                            <p>این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. این یک کپی ساختگی است قرار نیست خوانده شود. این فقط برای نشان دادن ظاهر و احساس متن تمام شده و تایپ شده در اینجا قرار داده شده است.</p>
                            <ul class="about-description-box">
                                <li>
                                    <p>صرفه جویی در زمان - ما روی جزئیات تمرکز می کنیم.</p>
                                </li>
                                <li>
                                    <p>صرفه جویی در پول - ما به محافظت از هزینه ها کمک می کنیم.</p>
                                </li>
                                <li>
                                    <p>رشد - تمرکز ما بر افزایش درآمد است.</p>
                                </li>
                                <li>
                                    <p>صرفه جویی در زمان - ما روی جزئیات تمرکز می کنیم.</p>
                                </li>
                            </ul>
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="assets/img/blog-02.jpg" alt="/">
                                </div>
                                <div class="col-lg-6">
                                    <img src="assets/img/blog-03.jpg" alt="/">
                                </div>
                            </div>
                            <p class="mt-4">این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. این یک کپی ساختگی است قرار نیست خوانده شود. این فقط برای نشان دادن ظاهر و احساس متن تمام شده و تایپ شده در اینجا قرار داده شده است. این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. فقط برای نمایشاین کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. این یک کپی ساختگی است قرار نیست خوانده شود. این فقط برای نشان دادن ظاهر و احساس متن تمام شده و تایپ شده در اینجا قرار داده شده است. این کلمات اینجا هستند تا تصوری اساسی از نحوه نمایش متن واقعی در ارائه نهایی خود به خواننده ارائه دهند. فقط برای نمایش</p>
                        </div>
                    </div>
                    <!--   Comments Start  -->
                    <div class="comments mt-5">
                        <h3>نظرات</h3>
                        <ul class="list-inline comments-list">
                            <!--  Item 01  -->
                            <li class="list-inline-item">
                                <div class="comment-wrap">
                                    <div class="image-comment">
                                        <img src="assets/img/client-01.png" alt="/">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-author">
                                            علی محمدی
                                            <p class="text-muted">
                                                <a href="#">21 مهر 1401، 10:45 قبل از ظهر</a>
                                            </p>
                                        </div>
                                        <p class="mb-0">سلام، این یک دیدگاه است. برای شروع کار با مدیریت، ویرایش و حذف نظرات، لطفاً از صفحه نظرات در داشبورد ببینید. آواتارهای نظردهنده از Gravatar می آیند.</p>
                                        <a href="#" class="comment-reply-link">
                                            <i class="lni lni-reply"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="list-inline-item">
                                        <div class="comment-wrap">
                                            <div class="image-comment">
                                                <img src="assets/img/client-02.png" alt="/">
                                            </div>
                                            <div class="comment-content">
                                                <div class="comment-author">
                                                    میترا وحیدی
                                                    <p class="text-muted">
                                                        <a href="#">21 مهر 1401، 12:30 بعد از ظهر</a>
                                                    </p>
                                                </div>
                                                <p class="mb-0">سلام، این یک دیدگاه است. برای شروع کار با مدیریت، ویرایش و حذف نظرات، لطفاً از صفحه نظرات در داشبورد ببینید. آواتارهای نظردهنده از Gravatar می آیند.</p>
                                                <a href="#" class="comment-reply-link">
                                                    <i class="lni lni-reply"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!--  Item 02  -->
                            <li class="list-inline-item">
                                <div class="comment-wrap">
                                    <div class="image-comment">
                                        <img src="assets/img/client-03.png" alt="/">
                                    </div>
                                    <div class="comment-content">
                                        <div class="comment-author">
                                            رها رستگار
                                            <p class="text-muted">
                                                <a href="#">21 مهر 1401، 13:40 بعد از ظهر</a>
                                            </p>
                                        </div>
                                        <p class="mb-0">سلام، این یک دیدگاه است. برای شروع کار با مدیریت، ویرایش و حذف نظرات، لطفاً از صفحه نظرات در داشبورد ببینید. آواتارهای نظردهنده از Gravatar می آیند.</p>
                                        <a href="#" class="comment-reply-link">
                                            <i class="lni lni-reply"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--Blog Reply-->
                    <div class="contact-wrapper">
                        <div class="contact my-5">
                            <div class="contact-form">
                                <h3 class="mb-4">ارسال پاسخ</h3>
                                    <div class="contact-box">
                                        <div class="contact-form">
                                            <form id="contactForm">
                                                <div class="row">
                                                    <div class="col-lg-6 form-item">
                                                        <div class="form-group">
                                                            <input name="name" id="name" type="text" class="form-control" placeholder="نام*" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 form-item">
                                                        <div class="form-group">
                                                            <input name="email" id="email" type="email" class="form-control" placeholder="ایمیل*" required >
                                                        </div>
                                                    </div>
                                                    <div class="col-12 form-item">
                                                        <div class="form-group">
                                                            <textarea name="comments" id="comments" rows="4" class="form-control textarea" placeholder="متن پیام...."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 mt-4">
                                                        <div class="btn-01">
                                                            <a href="javascript:void(0)">
                                                                <span>مشاهده بیشتر</span>
                                                                <i class="lni lni-arrow-left"></i>
                                                            </a>
                                                        </div>
                                                        <div id="message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="4000" >
                                                            <div class="toast-body d-inline-block"></div>
                                                            <button type="button" class="pr-3 close" data-dismiss="toast" aria-label="Close">
                                                                <span aria-hidden="true" class="lni-close size-xs "></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                </div>
                <aside class="col-lg-4 sidebar">
                    <div class="sidebar-wrapper">
                        {{-- <!--Search-->
                        <div class="search-boxes">
                            <div class="search">
                                <form>
                                    <div class="position-relative  form-group">
                                        <input type="text" placeholder="کلمات کلیدی خود را وارد کنید..." name="search">
                                        <button type="submit" class="btn">
                                            <i class="lni lni-search-alt"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                        <div class="aside-contents">
                            <!-- Categories -->
                            <div class="aside-box">
                                <div class="aside-title">
                                    <button class="btn btn-success col-md-12">ثبت نام</button>
                                </div>
                                {{-- <div class="aside-item">
                                    <ul class="list-unstyled">
                                        <li>
                                            <button class="btn btn-success">ثبت نام</button>
                                            <span>5</span>
                                        </li>
                                        <li>
                                            <a href="#">طراحی گرافیک</a>
                                            <span>1</span>
                                        </li>
                                        <li>
                                            <a href="#">کسب و کار</a>
                                            <span>3</span>
                                        </li>
                                        <li>
                                            <a href="#">برندینگ</a>
                                            <span>7</span>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                            <!-- Recent Post -->
                            {{-- <div class="aside-box">
                                <div class="aside-title">
                                    <h6>پست های اخیر</h6>
                                </div>
                                <div class="post-box">
                                    <!-- Item 01 -->
                                    <div class="post-list">
                                        <div class="post-image">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/instagram-01.jpg" alt="/">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title">
                                                <a href="javascript:void(0);">چرا یک سیستم هویت بصری به یاد ماندنی تر است؟</a>
                                            </h5>
                                            <p class="blog-date">21،مهر،1400</p>
                                        </div>
                                    </div>
                                    <!-- Item 02 -->
                                    <div class="post-list">
                                        <div class="post-image">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/instagram-02.jpg" alt="/">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title">
                                                <a href="javascript:void(0);">8 گام برای گرفتن تصمیمات تجاری بهتر</a>
                                            </h5>
                                            <p class="blog-date">21،مهر،1400</p>
                                        </div>
                                    </div>
                                    <!-- Item 03 -->
                                    <div class="post-list">
                                        <div class="post-image">
                                            <a href="javascript:void(0);">
                                                <img src="assets/img/instagram-03.jpg" alt="/">
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h5 class="post-title">
                                                <a href="javascript:void(0);">مدیریت بهتر اشتباهات تیم</a>
                                            </h5>
                                            <p class="blog-date">21،مهر،1400</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Archive -->
                            <div class="aside-box">
                                <div class="aside-contents">
                                    <div class="aside-title">
                                        <h6>آرشیو</h6>
                                    </div>
                                    <div class="aside-item">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">خرداد 1401</a>
                                                <span>11</span>
                                            </li>
                                            <li>
                                                <a href="#">مرداد 1401</a>
                                                <span>5</span>
                                            </li>
                                            <li>
                                                <a href="#">شهریور 1401</a>
                                                <span>1</span>
                                            </li>
                                            <li>
                                                <a href="#">آذر 1401</a>
                                                <span>2</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Gallery -->
                            <div class="aside-box">
                                <div class="aside-title">
                                    <h6>گالری</h6>
                                </div>
                                <ul class="list-inline image-gallery">
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-01.jpg" alt="/">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-02.jpg" alt="/">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-03.jpg" alt="/">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-04.jpg" alt="/">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-05.jpg" alt="/">
                                    </li>
                                    <li class="list-inline-item">
                                        <img src="assets/img/instagram-06.jpg" alt="/">
                                    </li>
                                </ul>
                            </div>
                            <!-- Tags -->
                            <div class="tag-box pb-6">
                                <div class="aside-title">
                                    <h6>برچسب ها</h6>
                                </div>
                                <div class="tagcloud">
                                    <a href="javascript:void(0);">کسب و کار</a>
                                    <a href="javascript:void(0);">بازاریابی</a>
                                    <a href="javascript:void(0);">سئو</a>
                                    <a href="javascript:void(0);">استراتژی</a>
                                    <a href="javascript:void(0);">برندینگ</a>
                                </div>
                            </div> --}}
                        </div>


                    </div>
                </aside>
                <div class="sidebar-toggler d-lg-none">
                    <span><i class="lni lni-pencil-alt"></i></span>
                </div>
            </div>
        </div>
    </section>
    <!--  blog Single End  -->

       <!--  Footer Start  -->
    <!--   Footer End   -->

    <!-- Return to Top -->
    <a href="javascript:void(0)" class="return-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--   Color Scheme  -->
    <a class="color-scheme hide text-white d-inline-block" href="javascript:void(0)"><i class="lni lni-night"></i></a>
    <a class="color-scheme hide color-scheme-light text-white d-none" href="javascript:void(0)"><i class="lni lni-sun"></i></a>

</div>
@endsection
