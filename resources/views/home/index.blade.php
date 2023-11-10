@extends('home.layout.master')


@section('css')
    <style>
        .course{
            background: #dde1e7;
            border-radius: 5px;
            box-shadow: inset -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94,104,121, .288)
        }
    </style>
@endsection

@section('content')
    <div class="homepage-02">

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

        <section id="content" class="full-screen container">

            <div class="row">
                <div style="" class="col-md-7 p-4">
                    <div class="col-md-12 border p-4 course">
                        شركت زيست پرتو آريا با هدف ارائه خدمات آزمايشگاهى و آموزشى از جمله انجام طرح هاى تحقيقاتى، انجام
                        پايان
                        نامه هاى دانشجويى، برگزارى كارگاه هاى آموزشى دانش آموزى و دانشجويى و تهيه بهترين برند هاى خارجى و
                        داخلى
                        تجهيزات، دستگاه ها و مواد آزمايشگاهى تاسيس گرديده است.

                        خدمات آزمايشگاهى شامل خدمات سلولى و مولكولى از جمله كشت سلول، تست هاى MTT و XTT، بررسى توكسيسيتى،
                        طراحى
                        پرايمر، انجام PCR و real-time PCR، انجام SDS-PAGE، تست هاى اندازه گيرى كمى پروتئين ها، وسترن
                        بلات،فلوسايتومترى، بررسى خاصيت آنتى اكسيدانى، رنگ آميزى هاى اختصاصى بافت و سلول، آماده سازى لام از
                        نمونه
                        هاى بافتى، القاى بيمارى در حيوانات و انجام انواع آزمون هاى In vivo است.

                        كارگاه هاى آموزشى شامل انواع وبينار هاى آنلاين و دوره هاى حضورى در تمامى زمينه هاى زيست شناسى،
                        بيوتكنولوژى، ميكروبيولوژى و بيوانفورماتيك است؛ همچنين برگزارى دوره هاى خصوصى و نيمه خصوصى به جهت
                        يادگيرى
                        صفر تا صد تكنيك هاى مد نظر پژوهشگران و دانشجويان به همراه مدرك معتبر بين المللى از انجمن زيست شناسى
                        ايران نيز امكان پذير است.
                    </div>
                    <div style="height: 50vh" class="col-md-12 border mt-4 p-4 course">
                        @foreach ($products as $key => $value)
                            @if ($key == 0)
                                <img style="max-height: 100%;max-width: 100%" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $value->image) }}"
                                    class="img-responsive">
                            @endif
                        @endforeach
                    </div>
                </div>

                <div style="" class="col-md-5 border p-4 course">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($courses as $key => $item)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <img style="height: 80%; width: 100%"
                                        src="{{ url(env('COURSE_IMAGE_PATH') . $item->image) }}" alt="/">
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
