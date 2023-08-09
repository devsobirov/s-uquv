<div class="ttm-box-col-wrapper col-md-4 {{$class ?? ''}}">
    <!-- featured-imagebox-course -->
    <div class="featured-imagebox featured-imagebox-course style1">
        <div class="ttm-post-thumbnail featured-thumbnail">
            <img width="526" height="470" class="img-fluid lazyload" src="{{asset($item->image)}}" data-src="{{asset($item->image)}}" alt="{{$item->title}}">
        </div>
        <div class="featured-content featured-content-post">

            <div class="featured-content-post-inner">

                <div class="post-title featured-title">
                    <h5><a href="{{route('web.courses.show', $item->id)}}">{{$item->title}}</a></h5>
                </div>
            </div>
            <div class="ttm-course-box-meta">
                <div class="ttm-enrolled">
{{--               <span class="ttm-count ttm-meta-line"><i class="fa fa-user" aria-hidden="true"></i>120</span>--}}
{{--               <span class="ttm-comments ttm-meta-line"><i class="fa fa-comment-o"></i>04</span>--}}
                </div>
                <a href="{{route('web.courses.show', $item->id)}}" class="ttm-lp-price"><ins>Batafsil</ins></a>
            </div>
        </div>
    </div>
    <!-- featured-imagebox-course end-->
</div>
