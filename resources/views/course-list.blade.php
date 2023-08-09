@extends('layouts.web')

@section('content')
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-textcolor-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Barcha o'quv kurslari</h2>
                        </div>
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('home')}}">Home</a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp;&gt;&nbsp;</span>
                            <span class="current">Barcha o'quv kurslari</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-main">

        <!--grid-section-->
        <section class="ttm-row grid-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    @foreach($paginated as $item)
                        @include('partials.course-item', ['item' => $item, 'class' => 'col-lg-3 col-sm-6'])
                    @endforeach
                </div>

                <div class="d-flex justify-content-center align-items-center">
                    {{$paginated->links()}}
                </div>
            </div>
        </section>
        <!--grid-section-->

    </div>
@endsection
