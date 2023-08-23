@extends('layouts.web')

@section('content')
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">{{$post->title}}</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Bosh sahifa" href="{{route('home')}}">@lang('main.footer_home')</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                            <span>
                                <a title="Barcha yangiliklar" href="{{route('web.blog.index')}}">@lang('main.homepage_all_news')</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                            <span class="current">{{$post->title}}</span>
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
                        <article class="post ttm-blog-single clearfix">
                            <!-- course-featured-wrapper -->
                            <div class="ttm-post-featured-wrapper ttm-featured-wrapper mb-20">
                                <div class="ttm-post-featured">
                                    <img class="img-fluid w-100" src="{{asset($post->image)}}" alt="{{$post->title}}">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="{{$post->created_at}}">{{$post->created_at?->format('d')}}<span class="entry-month">{{$post->created_at?->format('M')}}</span></time>
                                    </span>
                                </div>
                            </div>
                            <!-- course-featured-wrapper end -->
                            <!-- ttm-course-single-content -->
                            <div class="ttm-course-single-content">
                                <div class="ttm-tabs course-tabs" data-effect="fadeIn">
                                    <div class="content-tab">
                                        <!-- content-inner -->
                                        <div class="content-inner">
                                            {!! $post->content !!}
                                        </div><!-- content-inner end-->
                                    </div>
                                </div>
                            </div> <!-- ttm-course-single-content end -->
                        </article><!-- course end -->
                    </div>

                    @include('partials.sidebar', ['items' => $courses])
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div>
@endsection
