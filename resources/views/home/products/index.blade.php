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
    <!-- Products Section -->
    <div class="container">
        <div class="row">
            @foreach ($products as $item)
            <div class="col-6 col-lg-3 mb-5 mb-lg-0">
                <!-- Card -->
                <div class="card d-block">
                    <img class="card-img-top" src="{{ url(env('PRODUCT_IMAGES_UPLOAD_PATH') . $item->image) }}" alt="Image Description">
                    <div class="card-footer text-center py-4">
                        <h3 class="h5 mb-1">{{$item->title}}</h3>
                        <span class="d-block text-muted font-size-1 mb-3">محصول</span>
                        <a class="btn btn-sm btn-outline-primary btn-pill transition-3d-hover px-5" href="#">نمایش</a>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            @endforeach
        </div>
    </div>
    <!-- End Products Section -->
        </section>
        <!--   Blog End   -->

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
