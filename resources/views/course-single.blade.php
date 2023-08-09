@extends('layouts.web')

@section('content')
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{$course->title}}</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{route('home')}}">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                            <span>
                                <a title="Barcha o'quv kurslari" href="{{route('web.courses.index')}}">Barcha o'quv kurslari</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                            <span class="current">{{$course->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <!-- sidebar -->
        <div class="ttm-row sidebar ttm-sidebar-right ttm-bgcolor-white clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-9 col-lg-8 content-area">
                        <!-- course -->
                        <article class="course single-lp_course">
                            <!-- course-featured-wrapper -->
                            <div class="course-featured-wrapper mb-20">
                                <div class="course-featured">
                                    <img class="img-fluid w-100" src="{{asset($course->image)}}" alt="{{$course->title}}">
                                </div>
                            </div>
                            <!-- course-featured-wrapper end -->
                            <!-- ttm-course-single-content -->
                            <div class="ttm-course-single-content">
                                <div class="ttm-tabs course-tabs" data-effect="fadeIn">
                                    <div class="content-tab">
                                        <!-- content-inner -->
                                        <div class="content-inner">
                                            {!! $course->content !!}
                                        </div><!-- content-inner end-->
                                    </div>
                                </div>
                            </div> <!-- ttm-course-single-content end -->
                        </article><!-- course end -->


                        @include('partials.feedback-form')
                    </div>

                    @include('partials.sidebar', ['items' => $courses])
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div>
@endsection
