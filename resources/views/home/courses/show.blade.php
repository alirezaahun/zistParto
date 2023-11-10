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


        {{-- <!--  Home Start  -->
    <!--  Home End  --> --}}

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


        <!--  blog Single Start  -->
        <section class="blog-single py-6">
            <div class="container clearfix">
                <div class="row">
                    <div style="" class="col-md-7">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                    <div class="col-md-5">
                        <img style="width: 100%;height: auto" src="{{ url(env('COURSE_IMAGE_PATH') . $course->image) }}" alt="">
                    </div>
                </div>
                <div class="col-md-12 text-center mt-4">
                    <button style="height: 3rem" class="btn btn-success col-md-12">ثبت نام</button>
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
        <a class="color-scheme hide color-scheme-light text-white d-none" href="javascript:void(0)"><i
                class="lni lni-sun"></i></a>

    </div>
@endsection
