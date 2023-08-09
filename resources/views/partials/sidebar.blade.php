<div class="col-xl-3 col-lg-4 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey mt_60 pt-60 mb_60 pb-60 res-991-mt-0 res-991-pt-0">
    <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
    <aside class="widget widget-search">
        <form role="search" method="get" class="search-form" action="{{route('web.courses.search')}}">
            <label>
                <span class="screen-reader-text">Search for:</span>
                <input type="search" required class="input-text" placeholder="Search …" value="{{request('search')}}" name="search">
            </label>
            <button class="btn" type="submit" value="Search"> <i class="fa fa-search"></i> </button>
        </form>
    </aside>
    <aside class="widget widget-recent-post with-title">
        <h3 class="widget-title">Recent Courses</h3>
        <ul class="widget-post ttm-recent-post-list">
            @foreach($items as $item)
            <li>
                <a href="{{route('web.courses.show', $item->id)}}">
                    <img class="img-fluid" src="{{asset($item->image)}}" alt="{{$item->title}}">
                </a>
                <a href="{{route('web.courses.show', $item->id)}}">{{$item->title}}</a>
            </li>
            @endforeach
        </ul>
    </aside>

    <aside class="widget widget-download">
        <ul class="download">
            <li><a href="#"><i class="fa fa-file-pdf-o"></i>Download.pdf</a></li>
            <li><a href="#"><i class="fa fa-file-word-o"></i>Admission Criteria</a></li>
            <li><a href="#"><i class="fa fa-files-o"></i>Download.txt</a></li>
        </ul>
    </aside>

    <aside class="widget widget_media_image">
        <a href="#"><img class="img-fluid" src="{{asset('assets/images/widget-banner.jpg')}}" alt="widget-banner"></a>
    </aside>
    <aside class="widget contact-widget">
        <h3 class="widget-title">Get in touch</h3>
        <ul class="contact-widget-wrapper">
            <li><i class="fa fa-map-marker"></i>1212 Paint Valley Road East Rutherford, New York 06192, USA</li>
            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com" target="_blank">info@example.com</a></li>
            <li><i class="fa fa-phone"></i>(+01) 123 456 7890</li>
        </ul>
    </aside>
</div>
