@extends('home.layout.master')

@section('content')
    <div class="secondary-pages homepage-02">

        <!--- Preloader Start -->
        {{-- <div id="onyx-preloader">
            <div class="preloader">
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
        <section id="home" class="page-header  py-6 breadcrumbs">
            <div class="home-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>لیست دوره ها</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  Home End  -->

        <!--  Blog Start  -->
        <section id="blog" class="blog-wrapper blog-02 py-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2 class="main-title">دوره های ما</h2>
                            {{-- <p class="sub-title">ما آماده به اشتراک گذاشتن تجربه خود هستیم.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Item 01 -->
                    @foreach ($courses as $item)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-box">
                                <div class="blog-header">
                                    <a href="blog-single-02.html"><img  src="{{url(env('COURSE_IMAGE_PATH').$item->image)}}" alt="/"></a>
                                    <div class="blog-dates">
                                        <p class="blog-date">20</p>
                                        <p class="blog-month">مهر</p>
                                    </div>
                                </div>
                                <div class="blog-post-content">
                                    <h5>{{$item->title}}</h5>
                                    <p>{!! $item->description !!}</p>
                                    <div class="btn-01">
                                        <a href="{{route('courses.show' , $item)}}">
                                            <span>مشاهده و ثبت نام</span>
                                            <i class="lni lni-arrow-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--  Pagination -->
                {{-- <div class="mx-auto">
                    <div class="mx-auto my-4 pagination-box">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a href="javascript:void(0);" class="page-link" tabindex="-1">قبلی</a>
                                </li>
                                <li class="page-item active"><a href="javascript:void(0);" class="page-link">1</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">2</a></li>
                                <li class="page-item"><a href="javascript:void(0);" class="page-link">3</a></li>
                                <li class="page-item">
                                    <a href="javascript:void(0);" class="page-link">بعدی</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}
            </div>
        </section>
        <!--   Blog End   -->

        <!--  Footer Start  -->
        <!--   Footer End   -->

        <!-- Return to Top -->
        <a href="javascript:void(0)" class="return-to-top"><i class="lni lni-chevron-up"></i></a>

        <!--   Color Scheme  -->
        <a class="color-scheme hide text-white d-inline-block" href="javascript:void(0)"><i
                class="lni lni-night"></i></a>
        <a class="color-scheme hide color-scheme-light text-white d-none" href="javascript:void(0)"><i
                class="lni lni-sun"></i></a>

    </div>
@endsection
