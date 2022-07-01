@extends('layouts.master')
@section('meta')
@if(isset($category))
<title>{{$category->name}} - {{env('APP_NAME')}}</title>
<meta name="keywords" content="{{$category->tags->pluck('name')->join(', ')}}" />
<meta name="description" content="{{$category->description}}" />
<meta property="og:image" content="{{$category->image?$category->image->url:''}}">
<meta property="og:type" content="article">
<meta property="og:title" content="{{$category->name}}">
<meta property="og:description" content="{{$category->description}}">
@else
<title>Tin tức - {{env('APP_NAME')}}</title>
<meta name="keywords" content="{{env('APP_NAME')}}" />
<meta name="description" content="{{env('APP_NAME')}}" />
<meta property="og:image" content="{{env('APP_LOGO')}}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{env('APP_NAME')}}">
<meta property="og:description" content="{{env('APP_NAME')}}">
@endif
@stop
@section('content')
<div class="body-page">
    <div class="container">
        <div class="row">
            <!-- breadcums -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh mục tin tức</li>
                </ol>
            </nav>
            <div class="col-lg-8">
                <article class="card card-post-2">
                    <a class="thumbnail  hover-overlay mb-3" href="#">
                        <img class="thumbnail-img" loading="lazy"
                            src="{{ asset('hocvienielts/img/blog/single-post-video-1920x900.jpg')}}"
                            alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                    </a>
                    <div class="card-body p-0">
                        <h5 class="card-title mt-10">
                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                        </h5>
                        <p class="card-text text-muted">Curabitur semper interdum velit cursus tristique. Nulla feugiat
                            venenatis nisl, et feugiat erat aliquam nec. Phasellus convallis sapien sit amet nisi varius
                            mattis. Fusce</p>
                        <div class="d-flex justify-content-between text-muted">
                            <p>2022-06-02 15:30:24</p>
                            <p>181 lượt xem</p>
                        </div>
                    </div>
                </article>
                <hr>
                <div class="list-post">
                    <article class="card card-post">
                        <div class="row g-3 gx-md-4">
                            <div class="col-sm-5">
                            <a class="thumbnail  hover-overlay mb-3" href="#">
                        <img class="thumbnail-img" loading="lazy"
                            src="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}"
                            alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                    </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a
                                            href="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}">Chuỗi
                                            workshop Intensive IELTS - đồng hành chinh phục IELTS 4 kỹ năng</a>
                                    </h5>
                                    <p class="card-text text-muted mb-2">Từ tháng 2 đến tháng 5, IELTS Fighter tổ chức
                                        chuỗi Intensive IELTS cùng chia sẻ cách học và thực hành cách học nâng cao, phát
                                        triển toàn diện các kỹ năng bên cạnh chuỗi dự án học tập chuyên sâu hàng tháng.
                                    </p>
                                    <a class="card-read-more text-muted mt-auto fs-sm"
                                        href="#">Xem
                                        chi tiết</td>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <hr>
                    <article class="card card-post">
                        <div class="row g-3 gx-md-4">
                            <div class="col-sm-5">
                            <a class="thumbnail  hover-overlay mb-3" href="#">
                        <img class="thumbnail-img" loading="lazy"
                            src="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}"
                            alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                    </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a
                                            href="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}">Chuỗi
                                            workshop Intensive IELTS - đồng hành chinh phục IELTS 4 kỹ năng</a>
                                    </h5>
                                    <p class="card-text text-muted mb-2">Từ tháng 2 đến tháng 5, IELTS Fighter tổ chức
                                        chuỗi Intensive IELTS cùng chia sẻ cách học và thực hành cách học nâng cao, phát
                                        triển toàn diện các kỹ năng bên cạnh chuỗi dự án học tập chuyên sâu hàng tháng.
                                    </p>
                                    <a class="card-read-more text-muted mt-auto fs-sm"
                                        href="#">Xem
                                        chi tiết</td>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <hr>
                    <article class="card card-post">
                        <div class="row g-3 gx-md-4">
                            <div class="col-sm-5">
                            <a class="thumbnail  hover-overlay mb-3" href="#">
                        <img class="thumbnail-img" loading="lazy"
                            src="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}"
                            alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                    </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a
                                            href="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}">Chuỗi
                                            workshop Intensive IELTS - đồng hành chinh phục IELTS 4 kỹ năng</a>
                                    </h5>
                                    <p class="card-text text-muted mb-2">Từ tháng 2 đến tháng 5, IELTS Fighter tổ chức
                                        chuỗi Intensive IELTS cùng chia sẻ cách học và thực hành cách học nâng cao, phát
                                        triển toàn diện các kỹ năng bên cạnh chuỗi dự án học tập chuyên sâu hàng tháng.
                                    </p>
                                    <a class="card-read-more text-muted mt-auto fs-sm"
                                        href="#">Xem
                                        chi tiết</td>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <hr>
                    <article class="card card-post">
                        <div class="row g-3 gx-md-4">
                            <div class="col-sm-5">
                            <a class="thumbnail  hover-overlay mb-3" href="#">
                        <img class="thumbnail-img" loading="lazy"
                            src="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}"
                            alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
                    </a>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a
                                            href="{{ asset('hocvienielts/img/about-us-3-900x630.jpg')}}">Chuỗi
                                            workshop Intensive IELTS - đồng hành chinh phục IELTS 4 kỹ năng</a>
                                    </h5>
                                    <p class="card-text text-muted mb-2">Từ tháng 2 đến tháng 5, IELTS Fighter tổ chức
                                        chuỗi Intensive IELTS cùng chia sẻ cách học và thực hành cách học nâng cao, phát
                                        triển toàn diện các kỹ năng bên cạnh chuỗi dự án học tập chuyên sâu hàng tháng.
                                    </p>
                                    <a class="card-read-more text-muted mt-auto fs-sm"
                                        href="#">Xem
                                        chi tiết</td>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <hr>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ads">
                    <a href="#"><img src="https://st.ielts-fighter.com/resize/ielts-fighter-image/500x500/2022/03/09/a7b6a98d-4619-4a31-b545-f27b390d6301.jpg" alt="quảng cáo"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(function() {
    console.log('Post index ready')
})
</script>
@endsection