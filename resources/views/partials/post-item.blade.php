<div class="ttm-box-col-wrapper col-lg-4">
    <!-- featured-imagebox-course -->
    <div class="featured-imagebox featured-imagebox-course style1">
        <div class="ttm-post-thumbnail featured-thumbnail">
            <img width="526" height="470" class="img-fluid lazyload" src="{{asset($item->image)}}" data-src="{{asset($item->image)}}" alt="{{$item->title}}">
            <div class="ttm-box-post-date">
                                        <span class="ttm-entry-date">
                                            <time class="entry-date" datetime="{{$item->created_at}}">{{$item->created_at?->format('d M y')}}</time>
                                        </span>
            </div>
        </div>
        <div class="featured-content featured-content-post">

            <div class="featured-content-post-inner">

                <div class="post-title featured-title">
                    <h5><a href="{{route('web.blog.show', $item->id)}}">{{$item->title}}</a></h5>
{{--                                        n<p>"SANOAT O'QUV" NTM da "Geotexnologik quduqlar operatori" yo'nalishi bo'yicha o'qish boshlandi.</p>--}}
                </div>
            </div>
            <div class="ttm-course-box-meta">
                <div class="ttm-enrolled">
                    <span class="ttm-count ttm-meta-line"><i class="fa fa-eye" aria-hidden="true"></i>{{$item->views}}</span>
                </div>
                <a href="{{route('web.blog.show', $item->id)}}" class="ttm-lp-price"><ins>Batafsil</ins></a>
            </div>
        </div>
    </div>
    <!-- featured-imagebox-course end-->
</div>
