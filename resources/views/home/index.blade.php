@extends('home.layout.master')

@section('content')
    <div class="homepage-02">

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

        <!-- Header Start -->
        {{-- <header id="header" class="header-section fixed-top w-100">
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-header-info">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="lni lni-envelope"></i>
                                    <a href="javascript:void(0);">Support@example.com</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="lni lni-mobile"></i>
                                    <a href="javascript:void(0);">+1234567898</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-header-social">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <i class="lni lni-alarm-clock"></i>
                                    شنبه - چهارشنبه   08:00  -  16:00
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-twitter-original"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript:void(0);">
                                        <i class="lni lni-instagram-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
        <div class="row header-bottom dir-ltr">
            <nav class="navbar navbar-expand-lg w-100 header-nav py-0 pl-0">
                <a class="navbar-brand" href="index-01.html"><img src="assets/img/logo-02.png" alt="/"></a>
                <button type="button" data-toggle="collapse" data-target="#toggle-menu" aria-controls="toggle-menu" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed">
                    <span class="lni lni-menu"></span>
                </button>
                <div id="toggle-menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item dropdown mr-auto">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>خانه</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="index-01.html" target="_blank">
                                           خانه صفحه 01
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="index-02.html" target="_blank">
                                            خانه صفحه 02
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="index-03.html" target="_blank">
                                            خانه صفحه 03
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>درباره ما</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="about-02-1.html">
                                           درباره 01
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="about-02-2.html">
                                            درباره 02
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>خدمات</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="services-02.html">
                                            خدمات
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="services-detail-02.html">
                                            جزئیات خدمات
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>نمونه کارها</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="portfolio-2-columns-02.html">
                                            نمونه کارها 2 ستونی
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-3-columns-02.html">
                                            نمونه کارها 3 ستونی
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-4-columns-02.html">
                                            نمونه کارها 4 ستونی
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="portfolio-single-02.html">
                                            تک صفحه نمونه کارها
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>بلاگ</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="blog-grid-02.html">
                                            بلاگ ستونی
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="blog-02.html">
                                            بلاگ با سایدبار
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="blog-single-02.html">
                                            تک صفحه بلاگ
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>صفحات</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="faq-02-1.html">
                                            سوالات متداول 01
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="faq-02-2.html">
                                            سوالات متداول 02
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="404-02-1.html">
                                            ارور 404
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>المان ها</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="pricing-list-02.html">
                                            پلن های اشتراک
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="services-boxes-02.html">
                                            خدمات
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="blog-boxes-02.html">
                                            بلاگ
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="team-02.html">
                                        تیم ها
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="testimonial-02.html">
                                        نظرات
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>تماس با ما</h2></a>
                            <div class="dropdown-menu">
                                <div class="menu-items">
                                    <h3 class="title-feature">
                                        <a href="contact-02-1.html">
                                            تماس با ما 01
                                        </a>
                                    </h3>
                                    <h3 class="title-feature">
                                        <a href="contact-02-2.html">
                                            تماس با ما 02
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        </div>
    </header> --}}
        <!-- Header End -->

        <!--  Home Start  -->
        <section id="home" class="home home-01 home-02 full-screen">
            <div class="home-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="home-bg-content">
                                <h2>ایجاد یک مشارکت موفق</h2>
                                <p class="my-4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                    طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                </p>
                                <div class="btn-01 mt-2">
                                    <a href="javascript:void(0)">
                                        <span>شروع کنید</span>
                                        <i class="lni lni-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Home End  -->

        <!--  About Start  -->
        <section id="about" class="about-02 py-6">
            <div class="container">
                <div class="about-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title-box">
                                <h2 class="main-title">درباره شرکت ما</h2>
                                <p class="sub-title">به بهترین آزمایشگاه ایران خوش آمدید</p>
                            </div>
                            <div class="tab-box">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="mission-tab" data-toggle="tab" href="#mission"
                                            role="tab" aria-controls="mission" aria-selected="true">مهارت های ما</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="advantages-tab" data-toggle="tab" href="#advantages"
                                            role="tab" aria-controls="advantages" aria-selected="false">چرا ما را انتخاب
                                            کنید</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-4" id="myTabContent">
                                    <div class="tab-pane fade show active" id="mission" role="tabpanel"
                                        aria-labelledby="mission-tab">
                                        <p class="about-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                            با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد.</p>
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
                                    </div>
                                    <div class="tab-pane fade mt-4" id="advantages" role="tabpanel"
                                        aria-labelledby="advantages-tab">
                                        <p class="about-content">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                            با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                            سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با
                                            هدف بهبود ابزارهای کاربردی می باشد.</p>
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
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="{{ asset('images/home/about-03.jpg') }}" alt="/">
                            </div>
                            <div class="year-box">
                                <h2>18 سال سابقه مشاوره</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  About End  -->

        <!--  Portfolio Start  -->
        <section id="portfolio" class="portfolio-02 pt-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">دوره ها</h2>
                            <p class="sub-title">برای آشنایی با ما آخرین دوره های ما را ببینید</p>
                        </div>

                    </div>
                </div>
                <div class="portfolio-body">
                    <div class="row">
                        <!--  Item 01  -->
                        @foreach ($courses as $item)
                            <div class="col-md-6 col-lg-3">
                                <div class="portfolio-box">
                                    <div class="portfolio-img">
                                        <img src="{{ url(env('COURSE_IMAGE_PATH') . $item->image) }}" alt="/">
                                    </div>

                                    <div class="portfolio-overlay">
                                        <div class="portfolio-content">
                                            <div class="portfolio-hover-icon">
                                                <a href="{{route('courses.show' , $item)}}">
                                                    <i class="lni lni-plus"></i>
                                                </a>
                                            </div>
                                            <h5 class="portfolio-title-box">
                                                <a href="portfolio-single-02.html">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="btn-01">
                    <a href="{{route('courses.index')}}">
                        <span>مشاهده بیشتر</span>
                        <i class="lni lni-arrow-left"></i>
                    </a>
                </div>
            </div>
        </section>
        <!--   Portfolio End   -->

        <!--  Counted Start  -->
        <section class="counted-01 py-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="title-box">
                                    <h2 class="main-title">حقایق جالب</h2>
                                    <h5 class="sub-title">حقایق سرگرم کننده زیادی برای بهترین آثار داشته باشید. </h5>
                                </div>
                            </div>
                        </div>
                        <p>ما هر شرکتی را که نیاز به پشتیبانی کامپیوتری دارد دنبال نمی کنیم. ما فقط مشتریانی را انتخاب می
                            کنیم که در ارزش های ما سهیم باشند.</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="counted">
                            <div class="row">
                                <!-- Item-01 -->
                                <div class="col-6 col-sm-3 count-item">
                                    <div class="count-content">
                                        <span class="timer count-number" data-from="0" data-to="73"
                                            data-speed="5000">0</span>
                                        <p class="mb-0">اعضای تیم</p>
                                    </div>
                                </div>
                                <!-- Item-02 -->
                                <div class="col-6 col-sm-3 count-item">
                                    <div class="count-content">
                                        <span class="timer count-number" data-from="0" data-to="6549"
                                            data-speed="5000">0</span>
                                        <p class="mb-0">پروژه ها</p>
                                    </div>
                                </div>
                                <!-- Item-03 -->
                                <div class="col-6 col-sm-3 count-item">
                                    <div class="count-content">
                                        <span class="timer count-number" data-from="0" data-to="793"
                                            data-speed="5000">0</span>
                                        <p class="mb-0">جوایز</p>
                                    </div>
                                </div>
                                <!-- Item-04 -->
                                <div class="col-6 col-sm-3 count-item">
                                    <div class="count-content">
                                        <span class="timer count-number" data-from="0" data-to="286"
                                            data-speed="5000">0</span>
                                        <p class="mb-0">رضایت کاربران</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Counted End   -->

        <!--  Why Choose Start  -->
        <section id="whyChoose" class="why-choose-02 pt-6 pb-50">
            <div class="container">
                <div class="about-item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title-box">
                                <h2 class="main-title">مهارت های حرفه ای</h2>
                                <p class="sub-title">ما به شما کمک می کنیم تا تجارت خود را به سرعت توسعه دهید</p>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                            <!-- Skill -->
                            <div class="skill-box">
                                <div class="skillbar clearfix" data-percent="95%">
                                    <div class="skillbar-title"><span>کسب و کار</span></div>
                                    <div class="skillbar-bar fill-skillbar"></div>
                                    <div class="skill-bar-percent">95%</div>
                                </div>
                                <div class="skillbar clearfix " data-percent="85%">
                                    <div class="skillbar-title"><span>تجاری</span></div>
                                    <div class="skillbar-bar fill-skillbar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                                <div class="skillbar clearfix" data-percent="80%">
                                    <div class="skillbar-title"><span>در حال توسعه</span></div>
                                    <div class="skillbar-bar fill-skillbar"></div>
                                    <div class="skill-bar-percent">80%</div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 why-choose-boxes">
                            <div class="row">
                                <div class="col-md-6 boxes">
                                    <div class="why-choose-box">
                                        <i class="lni lni-thunder"></i>
                                        <h5 class="title">رهبر موثر</h5>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است</p>
                                    </div>
                                </div>
                                <div class="col-md-6 boxes">
                                    <div class="why-choose-box">
                                        <i class="lni lni-protection"></i>
                                        <h5 class="title"> مزایای مالیاتی</h5>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است</p>
                                    </div>
                                </div>
                                <div class="col-md-6 boxes">
                                    <div class="why-choose-box">
                                        <i class="lni lni-grow"></i>
                                        <h5 class="title">بهترین پشتیبانی</h5>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است</p>
                                    </div>
                                </div>
                                <div class="col-md-6 boxes">
                                    <div class="why-choose-box">
                                        <i class="lni lni-bulb"></i>
                                        <h5 class="title">ایده خلاقانه</h5>
                                        <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                            استفاده از طراحان گرافیک است</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Why Choose End   -->

        <!--  Services Start  -->
        <section id="services" class="services-02 pt-50 pb-6">
            <div class="container">
                <!--  Services Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">خدمات ما</h2>
                            <p class="sub-title">کسب و کار خود را با مشاوره ما رشد دهید</p>
                        </div>
                    </div>
                    <!--  Item 01  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-protection"></i>
                            </div>
                            <h5 class="services-title">امنیت تقویت شده</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 02  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-consulting"></i>
                            </div>
                            <h5 class="services-title">مشاوره کسب و کار</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 03  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-bullhorn"></i>
                            </div>
                            <h5 class="services-title">تبلیغ برند</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 04  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-grow"></i>
                            </div>
                            <h5 class="services-title">توسعه محصول</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 05  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-money-protection"></i>
                            </div>
                            <h5 class="services-title">مدیریت مالی</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 06  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="services-box">
                            <div class="services-icon">
                                <i class="lni lni-handshake"></i>
                            </div>
                            <h5 class="services-title">شرکت در پروژه</h5>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            </p>
                            <div class="btn-01">
                                <a href="services-detail-02.html">
                                    <span>مشاهده بیشتر</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Services End   -->


        <!--  Client Start  -->
        <section id="services" class="services-02 pt-50 pb-6">
            <div class="container">
                <!--  Services Content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">محصولات ما</h2>
                            <p class="sub-title">کسب و کار خود را با مشاوره ما رشد دهید</p>
                        </div>
                    </div>
                    <!--  Item 01  -->
                    @foreach ($products as $value)
                        <div class="col-md-6 col-lg-4">
                            <div class="services-box">
                                <div class="services-icon">
                                    <img style="width: 100%"
                                        src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $value->image) }}" alt="/">
                                </div>
                                <h5 class="services-title">{{ $value->title }}</h5>
                                <p>{!! $value->description !!}</p>
                                <div class="btn-01">
                                    <a href="{{route('products.index')}}">
                                        <span>مشاهده بیشتر</span>
                                        <i class="lni lni-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--  Client End  -->

        <!--  Team Start  -->
        <section id="team" class="team-02 py-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">تیم متخصص ما</h2>
                            <p class="sub-title">با تیم حرفه ای ما آشنا شوید</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--  Item 01 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="{{ asset('images/home/team-01.jpg') }}" alt="">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h5 class="team-name">میترا جاویدی</h5>
                                    <h6 class="team-job">توسعه دهنده وب</h6>
                                </div>
                                <div class="team-social">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-telegram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-dribbble"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Item 02 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="{{ asset('images/home/team-02.jpg') }}" alt="">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h5 class="team-name">سینا مریدی</h5>
                                    <h6 class="team-job">مدیر بازاریابی</h6>
                                </div>
                                <div class="team-social">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-telegram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-dribbble"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Item 03 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="team-box">
                            <div class="team-img">
                                <img src="{{ asset('images/home/team-03.jpg') }}" alt="">
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h5 class="team-name">زهرا الوند</h5>
                                    <h6 class="team-job">توسعه دهنده وب</h6>
                                </div>
                                <div class="team-social">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-instagram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-telegram-original"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript:void(0);"><i class="lni lni-dribbble"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Team End  -->


        {{-- <!--  Price Start  -->
        <section id="price" class="price-02 py-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">پلن های اشتراک</h2>
                            <p class="sub-title">ما بهترین قیمت را به شما پیشنهاد می دهیم!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--  Item 01  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box">
                            <div class="price-header">
                                <h3 class="price-title">پلن اولیه</h3>
                                <div class="price-cost">400000 <span>تومان</span></div>
                                <div class="pricing-period">ماهانه</div>
                            </div>
                            <div class="price-text">
                                <ul class="list-unstyled">
                                    <li>ویژگی استاندارد</li>
                                    <li>تجزیه و تحلیل تجاری و مالی</li>
                                    <li>مدیریت تیکت</li>
                                    <li>1 بهینه سازی رایگان</li>
                                    <li>پشتیبانی 24/7 ساعته</li>
                                </ul>
                            </div>
                            <div class="btn-01">
                                <a href="javascript:void(0)">
                                    <span>شروع کنید</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 02  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box offer-box">
                            <div class="price-highlighter">
                                <i class="lni lni-checkmark"></i>
                                <span>بهترین</span>
                            </div>
                            <div class="price-header">
                                <h3 class="price-title">پلن اولیه</h3>
                                <div class="price-cost">400000 <span>تومان</span></div>
                                <div class="pricing-period">ماهانه</div>
                            </div>
                            <div class="price-text">
                                <ul class="list-unstyled">
                                    <li>ویژگی استاندارد</li>
                                    <li>تجزیه و تحلیل تجاری و مالی</li>
                                    <li>مدیریت تیکت</li>
                                    <li>1 بهینه سازی رایگان</li>
                                    <li>پشتیبانی 24/7 ساعته</li>
                                </ul>
                            </div>
                            <div class="btn-01">
                                <a href="javascript:void(0)">
                                    <span>شروع کنید</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Item 03  -->
                    <div class="col-md-6 col-lg-4">
                        <div class="price-box">
                            <div class="price-header">
                                <h3 class="price-title">پلن اولیه</h3>
                                <div class="price-cost">400000 <span>تومان</span></div>
                                <div class="pricing-period">ماهانه</div>
                            </div>
                            <div class="price-text">
                                <ul class="list-unstyled">
                                    <li>ویژگی استاندارد</li>
                                    <li>تجزیه و تحلیل تجاری و مالی</li>
                                    <li>مدیریت تیکت</li>
                                    <li>1 بهینه سازی رایگان</li>
                                    <li>پشتیبانی 24/7 ساعته</li>
                                </ul>
                            </div>
                            <div class="btn-01">
                                <a href="javascript:void(0)">
                                    <span>شروع کنید</span>
                                    <i class="lni lni-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Price End  --> --}}

        <!--  Contact Start  -->
        <section class="contact contact-02 py-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">تماس با ما</h2>
                            <p class="sub-title">برای هر نوع کمکی تماس بگیرید.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6 pr-md-0">
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control"
                                                placeholder="نام*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="family" id="family" type="text" class="form-control"
                                                placeholder="نام خانوادگی*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control"
                                                placeholder="ایمیل*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 form-item">
                                        <div class="form-group">
                                            <input name="subject" id="subject" type="tel" class="form-control"
                                                placeholder="*شماره تلفن" required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-item">
                                        <div class="form-group">
                                            <textarea name="comments" id="comments" rows="4" class="form-control textarea" placeholder="متن پیام...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 pb-4">
                                        <div class="btn-01">
                                            <a href="javascript:void(0)" id="submit-btn" onclick="sendEmail()">
                                                <span>ارسال پیام</span>
                                                <i class="lni lni-arrow-left"></i>
                                            </a>
                                        </div>
                                        <div id="message" class="toast" role="alert" aria-live="assertive"
                                            aria-atomic="true" data-delay="4000">
                                            <div class="toast-body d-inline-block"></div>
                                            <button type="button" class="pr-3 close" data-dismiss="toast"
                                                aria-label="Close">
                                                <span aria-hidden="true" class="lni lni-close size-xs "></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 pl-md-0">
                        <div class="contact-img">
                            <img src="{{ asset('images/home/bg-contact-02.jpg') }}" alt="/">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Contact End   -->

        <!--  Blog Start  -->
        <section id="blog" class="blog-02 pt-50 pb-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">آخرین اخبار ما</h2>
                            <p class="sub-title">ما آماده به اشتراک گذاشتن تجربه خود هستیم.</p>
                        </div>
                    </div>
                    <!-- Item 01 -->
                    <div class=" col-md-6 col-lg-4">
                        <div class="blog-box">
                            <div class="blog-header">
                                <a href="blog-single-02.html"><img src="{{ asset('images/home/blog-01.jpg') }}"
                                        alt="/"></a>
                                <div class="blog-dates">
                                    <p class="blog-date">20</p>
                                    <p class="blog-month">مهر</p>
                                </div>
                            </div>
                            <div class="blog-post-content">
                                <h5>چرا یک سیستم هویت بصری؟</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                                <div class="btn-01">
                                    <a href="blog-single-02.html">
                                        <span>مشاهده بیشتر</span>
                                        <i class="lni lni-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 02 -->
                    <div class=" col-md-6 col-lg-4">
                        <div class="blog-box">
                            <div class="blog-header">
                                <a href="blog-single-02.html"><img src="{{ asset('images/home/blog-02.jpg') }}"
                                        alt="/"></a>
                                <div class="blog-dates">
                                    <p class="blog-date">18</p>
                                    <p class="blog-month">دی</p>
                                </div>
                            </div>
                            <div class="blog-post-content">
                                <h5>8 گام برای تصمیم گیری بهتر</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                                <div class="btn-01">
                                    <a href="blog-single-02.html">
                                        <span>مشاهده بیشتر</span>
                                        <i class="lni lni-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 03 -->
                    <div class=" col-md-6 col-lg-4">
                        <div class="blog-box">
                            <div class="blog-header">
                                <a href="blog-single-02.html"><img src="a{{ asset('images/home/blog-02.jpg') }}"
                                        alt="/"></a>
                                <div class="blog-dates">
                                    <p class="blog-date">11</p>
                                    <p class="blog-month">تیر</p>
                                </div>
                            </div>
                            <div class="blog-post-content">
                                <h5>مدیریت بهتر اشتباهات تیم</h5>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون</p>
                                <div class="btn-01">
                                    <a href="blog-single-02.html">
                                        <span>مشاهده بیشتر</span>
                                        <i class="lni lni-arrow-left"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--   Blog End   -->


        <!-- Return to Top -->
        <a href="javascript:void(0)" class="return-to-top"><i class="lni lni-chevron-up"></i></a>

        <!--   Color Scheme  -->
        <a class="color-scheme hide text-white d-inline-block" href="javascript:void(0)"><i
                class="lni lni-night"></i></a>
        <a class="color-scheme hide color-scheme-light text-white d-none" href="javascript:void(0)"><i
                class="lni lni-sun"></i></a>

    </div>
@endsection
