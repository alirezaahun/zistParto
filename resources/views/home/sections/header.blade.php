<header id="header" class="header-section fixed-top w-100">
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

    @php
        $categories = App\Models\Category::all();
    @endphp

    <div class="container">
    <div class="row header-bottom dir-ltr">
        <nav class="navbar navbar-expand-lg w-100 header-nav py-0 pl-0">
            <a style="" class="navbar-brand" href="index-01.html"><img style="width: 100px;height: 50px" src="{{asset('baselogo.png')}}" alt="/"></a>
            <button type="button" data-toggle="collapse" data-target="#toggle-menu" aria-controls="toggle-menu" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed">
                <span class="lni lni-menu"></span>
            </button>
            <div id="toggle-menu" class="collapse navbar-collapse">
                <ul class="navbar-nav w-100">
                    <li class="nav-item dropdown mr-auto">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link"><h2>خانه</h2></a>
                        {{-- <div class="dropdown-menu">
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
                        </div> --}}
                    </li>

                    @foreach ($categories as $value)
                    <li class="nav-item dropdown">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>{{$value->title}}</h2></a>
                        <div class="dropdown-menu">
                            @foreach ($value->courses as $item)
                            <div class="menu-items">
                                <h3 class="title-feature">
                                    <a href="{{route('courses.show' , $item)}}">
                                        {{$item->title}}
                                    </a>
                                </h3>
                            </div>
                            @endforeach
                        </div>
                    </li>
                    @endforeach

                    <li class="nav-item dropdown">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>درباره ما</h2></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="javascript:void(0);" class="nav-link dropdown-toggle"><h2>بلاگ</h2></a>
                        <div class="dropdown-menu">
                            <div class="menu-items">
                                <h3 class="title-feature">
                                    <a href="blog-grid-03.html">
                                        بلاگ ستونی
                                    </a>
                                </h3>
                                <h3 class="title-feature">
                                    <a href="blog-03.html">
                                        بلاگ با سایدبار
                                    </a>
                                </h3>
                                <h3 class="title-feature">
                                    <a href="blog-single-03.html">
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
                                    <a href="faq-03-01.html">
                                        سوالات متداول 01
                                    </a>
                                </h3>
                                <h3 class="title-feature">
                                    <a href="faq-03-02.html">
                                        سوالات متداول 02
                                    </a>
                                </h3>
                                <h3 class="title-feature">
                                    <a href="404-03-1.html">
                                        ارور 404
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
                                    <a href="contact-03-1.html">
                                        تماس با ما 01
                                    </a>
                                </h3>
                                <h3 class="title-feature">
                                    <a href="contact-03-2.html">
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
</header>
