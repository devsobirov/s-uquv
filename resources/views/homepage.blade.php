@extends('layouts.web')

@section('content')
    <div class="banner-slider banner-slider-overlay slick_slider slick-arrows-style1" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":true, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":870,"settings":{"slidesToShow": 1}} , {"breakpoint":525,"settings":{"slidesToShow": 1}}]}'>
        @foreach($banners as $banner)
            <!-- banner-slide -->
                <div class="banner-slide">
                    <img width="1920" height="500" class="img-fluid" src="{{asset($banner->image)}}" alt="slider-image" />
                    <div class="banner-caption">
                        <div class="info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner-text_1 ttm-textcolor-white text-center mt-50 pt-50 res-1199-mt-0 res-1199-pt-0">
                                            @if($banner->intro)
                                                <div class="slideInUp animated text mt-10 res-1199-mt-0">{!! $banner->intro !!}</div>
                                            @endif
                                            <div class="mt-10 mb-15">
                                                <h2 class="slideInUp animated"><span class="ttm-textcolor-skincolor">{!! $banner->title !!}</h2>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>

    <!--site-main start-->
    <div class="site-main">


        <!--ttm-row features-section-->
        <section class="ttm-row features-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row ttm-vertical_sep">
                    <div class="col-lg-12">
                        <div class="ttm-col-bgcolor-yes ttm-bgcolor-white ttm-bg ttm-right-span mt_80 ml_100 res-1199-mt-0 pl-90 res-991-pl-100">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2">
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">10
                                                        </span>
                                                </h4>
                                                <h3 class="ttm-fid-title">Yillik tajriba</h3>
                                            </div>
                                        </div>
                                        <!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2">
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="20" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">20
                                                        </span>
                                                </h4>
                                                <h3 class="ttm-fid-title">Malakali mutaxassislar</h3>
                                            </div>
                                        </div>
                                        <!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2">
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="170" data-interval="5" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">170
                                                        </span>
                                                </h4>
                                                <h3 class="ttm-fid-title">dan ortiq yo'nalishlar</h3>
                                            </div>
                                        </div>
                                        <!-- ttm-fid end -->
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6">
                                        <!-- ttm-fid -->
                                        <div class="ttm-fid inside ttm-fid-with-icon style2">
                                            <div class="ttm-fid-contents">
                                                <h4 class="ttm-fid-inner">
                                                        <span data-appear-animation="animateDigits" data-from="0" data-to="2145" data-interval="15" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">2145
                                                        </span>
                                                </h4>
                                                <h3 class="ttm-fid-title">bitiruvchilar</h3>
                                            </div>
                                        </div>
                                        <!-- ttm-fid end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--ttm-row features-section end-->


        <!--introduction-section_1-->
        <section class="ttm-row introduction-section_1 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="pt-40 res-991-pt-30">
                            <!-- section title -->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>Biz haqimizda</h5>
                                    <h2 class="title">Sanoat o'quv </h2>
                                </div>
                                <div class="heading-seperator"><span></span></div>
                            </div>
                            <!-- section title end -->
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside style1 ttm-fid-with-icon">
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                            <span data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="1" data-before="" data-before-style="sup" data-after="" data-after-style="sub" class="numinate">10
                                            </span>
                                    </h4>
                                    <h3 class="ttm-fid-title">Yillik <br> Tajriba</h3>
                                </div>
                            </div>
                            <!-- ttm-fid end -->
                            <p>‌O’quv markazimiz 2008 yildan beri o’z faoliyatini olib bormoqda. Shu davr mobaynida 2000 dan ortiq ishsiz odamni kasb egalari bo’lishiga yordam berib kelgan.</p>
                            <p>Hozirgi kunda ishsizlik muammosi globallashib borayotgan davrda, bizning o'quv markazimizdan ishonchli kasb egasi bo'lish ehtimoli juda yuqori. </p>
                            <p>Markazimiz bilan nafaqat O'zbekiston kompaniyalari, balkim xorijiy korxonalarning ham shartnomalari mavjud.</p>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper res-991-pt-30">
                            <img width="595" height="659" class="img-fluid lazyload" src="{{asset('assets/images/single-img-01.jpg')}}" data-src="{{asset('assets/images/single-img-01.jpg')}}" alt="image">
                            <!-- featured-icon-box -->
                            <div class="featured-icon-box icon-align-before-content style6">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-style-round ttm-icon_element-color-skincolor ttm-icon_element-size-sm">
                                        <i class="flaticon-school-3"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Kasb mutaxassisi sifatidagi sertifikatlar beriladi</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- featured-icon-box end -->
                        </div>
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--introduction-section_1-->


        <!--portfolio-section_1-->
        <section class="ttm-row portfolio-section_1 clearfix">
            <div class="container">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h5>Hamkorlar</h5>
                        <h2 class="title">Hamkor kompaniyalar ro'yhati</h2>
                    </div>
                    <div class="heading-seperator"><span></span></div>
                </div>
                <!-- section title end -->
                <!-- row -->
                <div class="row slick_slider mt-35" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":991,"settings":{"slidesToShow": 3}}, {"breakpoint":678,"settings":{"slidesToShow": 2}}, {"breakpoint":460,"settings":{"slidesToShow": 1}}]}'>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/1.jpg')}}" data-src="{{asset('assets/images/partners/1.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"QIZILQUMSEMENT" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/2.jpg')}}" data-src="{{asset('assets/images/partners/2.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position"> "NAVOIYAZOT" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/3.jpg')}}" data-src="{{asset('assets/images/partners/3.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"JANUBSANOATMONTAJ" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/4.jpg')}}" data-src="{{asset('assets/images/partners/4.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"NAVOIY KON METALLURGIYA KOMBINATI"</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/5.jpg')}}" data-src="{{asset('assets/images/partners/5.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"NAVOIY ISSIQLIK ELEKTR STANSIYASI" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/6.jpg')}}" data-src="{{asset('assets/images/partners/6.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"NAVOIY HUDUDIY ELEKTR TARMOQLARI" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                    <div class="ttm-box-col-wrapper col-lg-4">
                        <!-- featured-imagebox-portfolio-->
                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                            <div class="featured-thumbnail">
                                <img width="270" height="244" class="img-fluid lazyload" src="{{asset('assets/images/partners/7.jpg')}}" data-src="{{asset('assets/images/partners/7.jpg')}}" alt="image">
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">

                                </div>
                                <div class="team-position">"MILLIY ELEKTR TARMOQLARI" AJ</div>
                            </div>
                        </div>
                        <!-- featured-imagebox-team end-->
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--portfolio-section_1 end-->


        <!--skill-section_1-->
        <section class="ttm-row skill-section_1 bg-img9 mt_232 res-991-mt-0 ttm-bgcolor-darkgrey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style1 clearfix">
                            <div class="title-header">
                                <h5>Sanoat O'quv</h5>
                                <h2 class="title">Nima uchun Biz?</h2>
                            </div>
                            <div class="title-desc">Siz o'zingiz xohlagan kasb egasi bo'lishingizda bizning professional o'qituvchilarimiz sizga o'z bilimlari va malakalarini berishadi</div>
                        </div>
                        <!-- section-title end -->
                    </div>
                </div>
                <!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Mutaxassislar</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Darslar o'z sohasining professional mutaxassislari tomonidan olib boriladi</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Tajriba</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Markazimiz 2008 yildan buyon o'z faoliyatini yuritib kelmoqda</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Keng tanlov</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Markazimizdan 170 dan ortiq yo'nalishlar mavjud</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Hamkorlik</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Markazimizning bir nechta yirik korxonalar bilan hamkorlik qiladi</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Sertifikat</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Markazimizda kasb mutaxassisi sifatidagi sertifikatlar beriladi</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-white ttm-icon_element-size-xs ttm-icon_element-style-square">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Komfort</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Darslar shinam barcha zarur jixozlarga ega sinf xonalarida olib boriladi</p>
                                </div>
                            </div>
                        </div>
                        <!-- featured-icon-box end-->
                    </div>
                </div>
                <!-- row end -->
            </div>
        </section>
        <!--skill-section_1-->

        <!--features-section-->
        <section class="ttm-row features-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="ttm-bgcolor-skincolor position-relative mt_90 res-991-mt_45 ml-15 res-991-ml-0 mr-15 res-991-mr-0">
                        <div class="pt-35 res-991-pr-0 pr-15 pb-25 pl-50 res-991-pl-35 ttm-bgcolor-white box-shadow mr-9">
                            <div class="row align-items-center">
                                <div class="col-lg-8 col-md-6">
                                    <h3 class="mb-18">Kelajagingizga befarq bo'lmang.</h3>
                                    <p>Agar haligacha o'z yo'nalishingizni topa olmay yurgan bo'lsangiz bizning markaz sizga o'z xizmatlarini taklif qiladi. Siz o'zingiz xohlagan kasb egasi bo'lishingizda bizning professional o'qituvchilarimiz sizga o'z bilimlari va malakalarini berishadi</p>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-content style8">
                                        <div class="featured-icon">
                                            <img width="206" height="176" class="img-fluid lazyloaded" data-src="{{asset('assets/images/single-img-02.png')}}" alt="image" src="{{asset('assets/images/single-img-02.png')}}">
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Sanoat O'quv</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>Zamonaviy o'rgatish sistemasi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row end-->
            </div>
        </section>
        <!--features-section end-->
        <section class="ttm-row testimonial-section_2 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Mutaxassisliklar</h5>
                                <h2 class="title"><a href="{{route('web.courses.index')}}">Barcha yo'nalishlar bilan tanishish</a></h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}},
                    {"breakpoint":590,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($courses as $course)
                        @include('partials.course-item', ['item' => $course])
                    @endforeach
                </div>

            </div>
        </section>
        <section class="ttm-row action2-section ttm-bgcolor-darkgrey bg-img7 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container"><!--container-->
                <div class="row"><!--row-->
                    <div class="col-lg-9 m-auto">
                        <div class="row-title text-center mt_5">
                            <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-xl">
                                <h1>?</h1>
                            </div>
                            <!-- section title -->
                            <div class="section-title mb-5">
                                <div class="title-header ttm-textcolor-white">
                                    <h5>Tanlovda qiynalyapsizmi?</h5>
                                    <h2 class="title">Ariza qoldiring tanlovda <br> <span class="ttm-textcolor-skincolor">yordamlashamiz</span></h2>
                                </div>
                            </div><!-- section title end -->
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="#">Ariza qoldirish</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial-section_2-->

        <!--course-section_1-->
        <section class="ttm-row course-section_1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section title -->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Yangiliklar</h5>
                                <h2 class="title"><a href="{{route('web.blog.index')}}">So'ngi yangiliklar</a></h2>
                            </div>
                            <div class="heading-seperator"><span></span></div>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <!-- row end -->
                <!-- slick_slider -->
                <div class="row slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":false, "autoplay":true, "centerMode":true, "centerPadding":0, "infinite":true, "initialSlide":2, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}},
                    {"breakpoint":590,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($posts as $post)
                        @include('partials.post-item', ['item' => $post])
                    @endforeach
                </div>
            </div>
        </section>
        <!--course-section_1-->
        <section class="ttm-row action-section ttm-bgcolor-skincolor bg-img5 ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container"><!--container-->
                <div class="row"><!--row-->
                    <div class="col-lg-9 m-auto">
                        <div class="row-title text-center">

                            <!-- section title -->
                            <div class="section-title mb-10">

                            </div><!-- section title end -->
                            <a class="ttm-btn ttm-btn-size-lg ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white" href="#">O'qish uchun ariza qoldirish</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>








    </div>
    <!--site-main end-->
@endsection
